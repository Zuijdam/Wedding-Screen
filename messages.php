1234 hoedje van papier

<?php
require 'RedBeanPHP5_5/rb.php';
R::setup(
    'mysql:host=localhost;dbname='.$database,
    $user,
    $password
);

$post = R::load( 'post', 1);
echo $post->title;
?>