1234 hoedje van papier

<?php
require 'RedBeanPHP5_5/rb.php';
R::setup( 'mysql:host=localhost;dbname=WeddingWall',
'root', 'root' ); //for both mysql or mariaDB

$post = R::load( 'post', 1);
echo $post->title;
?>