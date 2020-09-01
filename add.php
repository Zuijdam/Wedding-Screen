
<?php
include 'inc.php';


    //test post
$post = R::dispense('post');
$post->title = $_POST["message"];
$post->author = $_POST["author"];
$post->created = date("Y-m-d H:i:s");
$id = R::store($post);
