

<?php
include 'inc.php';

//echo '<b>Laatste update:</b><br>';
$post2 = R::findLast('post');


echo '<h1 class="display-4">'.$post2->title.'</h1>';
echo '<p class="lead"><i>'.$post2->author.'</i></p>';
echo '<p>'.toNiceTimeElapsed($post2->created).'</p>';


R::close();

//hele array
//echo '<hr>';
//$post = R::findAll('post');
//echo '<pre>'; print_r($post); echo '</pre>';

?>







