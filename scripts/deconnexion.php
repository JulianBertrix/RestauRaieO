<?php
session_start();
    
if(isset($_SESSION['username'])){
    header('location: http://php-decouverte.bwb/?path=home.php');
    session_destroy();
}

?>
