<?php
include 'config.php';
include 'includes/functions.php';
require 'RedBeanPHP5_5/rb.php';

R::setup(
    'mysql:host=localhost;dbname='.$database,
    $user,
    $password
);
?>