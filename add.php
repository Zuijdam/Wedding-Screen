<?php
include 'inc.php';
    //post message
        $post = R::dispense('post');
        $post->title = $_POST["message"];
        $post->author = $_POST["author"];
        $post->created = date("Y-m-d H:i:s");
        $id = R::store($post);
echo '<a href="feed.php">feed.php</a>';
?>
