
<?php
include 'inc.php';

$post = R::load('post', 2);
echo $post->title;


$post = R::findAll('post');


echo '<pre>'; print_r($post); echo '</pre>';

?>