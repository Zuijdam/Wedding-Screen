
<?php
include 'config.php';
require 'RedBeanPHP5_5/rb.php';
R::setup(
    'mysql:host=localhost;dbname='.$database,
    $user,
    $password
);

    //test post
$post = R::dispense('post');
$post->title = $_POST["message"];
$post->author = $_POST["author"];
$id = R::store($post);
