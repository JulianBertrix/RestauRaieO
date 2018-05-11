<?php
 session_start();
 
 
 
 $message_json = json_decode("/datas/message.json", true);
 $json = file_get_contents($message_json);
 
 $messages = array(
    "user" => "$_SESSION['username']",
    "message" => "$_POST"
 );
 
 file_put_contents(json_encode($_SERVER['DOCUMENT_ROOT'] . "/datas/message.json"), $messages);
 var_dump($messages);
?>
