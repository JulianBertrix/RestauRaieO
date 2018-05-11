<?php
    session_start();
     
    $path = "../datas/message.json";
     
    $json = file_get_contents($path);
    $message_json = json_decode($json, true);
     
    var_dump($message_json);
     
    $messages = array(
       "user" => $_SESSION['username'],
       "message" => $_POST['message']
    );
      
    array_push($message_json, $messages);
     
    $liste = json_encode($message_json);
    file_put_contents($path, $liste);

    header('location: http://php-decouverte.bwb/?path=livre_d_or.php'); 
?>
