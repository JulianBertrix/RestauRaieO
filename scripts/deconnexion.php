<?php
session_start();
    
if(isset($_SESSION['username'])){
    $_SESSION['username'] = $_POST['username'];
}

header('location: http://php-decouverte.bwb/?path=home.php');
session_destroy();
?>
