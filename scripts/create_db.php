<?php
    /*
     Ce fichier initialise nos données en créant la Db et les tables qui vont avec.
     Pour ce faire les requetes sont enregistrées dans le fichier database.sql. 
    */

    //on requpère le contenue du fichier ciblé sous forme de chane de caractère
    $sql = file_get_contents("../db/database.sql");
    
    $dbh = new PDO('mysql:host=localhost;', "root", "");
    
    $dbh->exec($sql);
    echo $sql;
?>