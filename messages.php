<?php
include 'inc.php';

//Posts van de laatste 2 minuten ophalen
$recentPosts = R::getAll('SELECT * FROM post WHERE created > NOW() - INTERVAL 120 SECOND ORDER BY created DESC');

if($recentPosts){
    //Als er recente posts zijn, de nieuwste post tonen
    $displayId = $recentPosts[0]["id"];
    $displayTitle = $recentPosts[0]["title"];
    $displayAuthor = $recentPosts[0]["author"];
    $displayCreated = $recentPosts[0]["created"];
}
else{
    //Kijken of we bezig zijn om een post te tonen. ShowTime is dan minder dan 2 minuten geleden
    $showPost = R::getAll('SELECT * FROM post WHERE show_time > NOW() - INTERVAL 120 SECOND');

    if($showPost){
        //Als er een post is die we minder dan 2 minuten tonen, ga door met die te tonen
        $displayId = $showPost[0]["id"];
        $displayTitle = $showPost[0]["title"];
        $displayAuthor = $showPost[0]["author"];
        $displayCreated = $showPost[0]["created"];
    }
    else{
        //Als we een oude post 2 minuten hebben getoond, is het tijd om weer een andere oude post te pakken die ook de afgelopen 2 minuten niet is getoond
        $oldPosts = R::getAll('SELECT * FROM post WHERE show_time < NOW() - INTERVAL 120 SECOND');

        //Random oude post selecteren om te tonen
        $oldRandomPostArrayKey = array_rand($oldPosts, 1);

        //Huidige tijd instellen als het moment dat we begonnen zijn om deze te tonen.
        $postNewShow = R::load('post', $oldPosts[$oldRandomPostArrayKey]["id"]);

        $postNewShow->show_time = date("Y-m-d H:i:s");
        R::store($postNewShow);

        $displayId = $postNewShow->id;
        $displayTitle = $postNewShow->title;
        $displayAuthor = $postNewShow->author;
        $displayCreated = $postNewShow->created;
    }

}
// Display message
echo '<p class="lead">'.$displayAuthor.' schreef:  </p>';
echo '<h1 class="display-4">'.$displayTitle.'</h1>';
echo '<hr class="HRwit">';
echo '<p class="lead">'.toNiceTimeElapsed($displayCreated).'</p>';


R::close();
?>
