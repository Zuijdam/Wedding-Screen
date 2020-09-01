
<?php
include 'inc.php';

echo '<b>Laatste update:</b><br>';
$post2 = R::findLast('post');
echo '<i>'.$post2->title.'</i>';
echo '<br>';
echo $post2->author;
echo '<br>';
echo $post2->created;

//hele array
//echo '<hr>';
//$post = R::findAll('post');
//echo '<pre>'; print_r($post); echo '</pre>';

?>