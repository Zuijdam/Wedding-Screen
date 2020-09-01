<?php
include 'config.php';
require 'RedBeanPHP5_5/rb.php';
R::setup(
    'mysql:host=localhost;dbname='.$database,
    $user,
    $password
);