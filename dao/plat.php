<?php
    //retourne la liste des plats sous la forme d'un tableau associatif
    function getPlat(){
       //cration d'une connextion à la base de donnée
       $dbh = new PDO('mysql:host=localhost;dbname=resto_db_bwb', "root", "");
       //corp de la requete SQL du point de vue metier
       $request = "SELECT * FROM plats";
       //executon de la requete
       $statement = $dbh->query($request);
       //récupération du resultat de la requete
       $plats = $statement->fetchAll();
       return $plats;
    }
?>