<?php
    session_start();
    require_once $_SERVER['DOCUMENT_ROOT'] . "/scripts/fonction.php";
    
	echo getUserForm();    
    echo getMessage();
?>


