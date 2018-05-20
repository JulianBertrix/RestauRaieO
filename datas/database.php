<?php
    //cration d'une connextion à la base de donnée
    $dbh = new PDO('mysql:host=localhost;dbname=test', "root", "");
    print_r($dbh);
    print_r("\n");
    //corp de la requete SQL du point de vue metier
    $request = "SELECT * FROM Eleve";
    print_r($request);
    print_r("\n");
    //executon de la requete
    $statement = $dbh->query($request);
    print_r($statement);
    print_r("\n");
    //récupération du resultat de la requete
    $eleves = $statement->fechAll();
    print_r($eleves);
?>

