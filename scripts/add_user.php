<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/scripts/fonction.php";
    $isExiste = false;
    
    $path = $_SERVER['DOCUMENT_ROOT'] . "/datas/user.json";
    
    $json = file_get_contents($path);
    $user = json_decode($json, true);
    
    $newUser = array(
            "name" => $_POST['name'],
            "firstname" => $_POST['firstname'],
            "email" => $_POST['email'],
            "username" => $_POST['username'],
            "password" => $_POST['password']
    );
    
    foreach($user as $value){
        if($_POST['username'] === $value['username']){
            $isExiste = true;    
        }
    }

    if(!$isExiste){
        echo addUser($newUser);    
        header('location: http://php-decouverte.bwb/?path=home.php');
    }else{
        header('location: http://php-decouverte.bwb/?path=inscription.php');
    }
     
?>
