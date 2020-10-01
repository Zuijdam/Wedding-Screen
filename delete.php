<?php
include 'inc.php';
if($_GET["key"] == $deleteKey){
    $bericht = R::load('post', $_GET["id"]);
    R::trash($bericht);
    echo "bericht met id ".$_GET["id"]." verwijderd";
}
