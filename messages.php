

<?php
include 'config.php';
require 'RedBeanPHP5_5/rb.php';
R::setup(
    'mysql:host=localhost;dbname='.$database,
    $user,
    $password
);

$post = R::load( 'post', 2);
echo $post->title;
?>