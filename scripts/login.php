<?php
    session_start();
    require_once $_SERVER['DOCUMENT_ROOT'] . "/scripts/fonction.php";
    echo getUser();
    
    header('location: http://php-decouverte.bwb/?path=home.php');
?>
