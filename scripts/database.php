<?php
    include '../dao/plat.php';
    include '../dao/users.php';
    
    echo "les plats";
    echo "\n";
    var_dump(getPlat());
    echo "\n";
    echo "\n";
    
    echo "les utilisateurs";
    echo "\n";
    var_dump(getUser());
    echo "\n";
    echo "\n";
    
    echo "un utilisateur par son id";
    echo "\n";
    var_dump(get_user(1));
    echo "\n";
    echo "\n";
    
    echo "les utilisateurs aprés la suppression d'un utilisateur";
    echo "\n";
    var_dump(deleteUser(3));
    echo "\n";
    echo "\n";
    
    echo "les utilisateurs aprés la mise a jour d'un utilisateur";
    echo "\n";
    var_dump(updateUser(4));
    echo "\n";
    echo "\n";
/*
    //cration d'une connextion à la base de donnée
    $dbh = new PDO('mysql:host=localhost;dbname=tuto', "root", "");
    print_r($dbh);
    print_r("\n");
    //corp de la requete SQL du point de vue metier
    $request = "SELECT * FROM jeux_video";
    print_r($request);
    print_r("\n");
    //executon de la requete
    $statement = $dbh->query($request);
    print_r($statement);
    print_r("\n");
    //récupération du resultat de la requete
    $datas = $statement->fetchAll();
    print_r($datas);
    */
?>

