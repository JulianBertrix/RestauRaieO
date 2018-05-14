<?php
    session_start();
    require_once $_SERVER['DOCUMENT_ROOT'] . "/scripts/fonction.php";
    
    $message = array(
       "user" => $_SESSION['username'],
       "message" => $_POST['message']
    );
        
    echo addMessage($message);
    
    header('location: http://php-decouverte.bwb/?path=livre_d_or.php'); 
?>
