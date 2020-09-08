

<?php
include 'inc.php';

//echo '<b>Laatste update:</b><br>';
$post2 = R::findLast('post');



echo '<h1 class="display-4">'.$post2->title.'</h1>';
echo '<hr>';
echo '<p class="lead"><footer class="blockquote-footer">'.$post2->author.' (<cite title="Source Title">'.toNiceTimeElapsed($post2->created).')</cite></footer> </p>';
echo '<div class="hidden">'.$post2->id.'</div>';

R::close();

//hele array
//echo '<hr>';
//$post = R::findAll('post');
//echo '<pre>'; print_r($post); echo '</pre>';

?>







