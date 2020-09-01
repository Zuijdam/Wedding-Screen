<?php
require 'RedBeanPHP5_5/rb.php';
R::setup(
    'mysql:host=localhost;dbname=WeddingWall',
    'root',
    'root'
); //for both mysql or mariaDB
$post = R::dispense('post');
$post->title = '123hoedjevanpapier';
$id = R::store($post);
?>