<?php
    /*
    //retourne l'id d'un utilisateur
    function createUser(){
    
    }
    */
    //retourne un tableau associatif correspondant à l'id d'un utilisateur passé en argument 
    function get_user($id){
        $dbh = new PDO('mysql:host=localhost;dbname=resto_db_bwb', "root", "");
        $request = "SELECT * FROM users WHERE id=$id";
        $statement = $dbh->query($request);
        $user = $statement->fetchAll();
        return $user;
    }

    //retourne un tableau associatif correspondant à tout les utilisateur
    function getUser(){
        $dbh = new PDO('mysql:host=localhost;dbname=resto_db_bwb', "root", "");
        $request = "SELECT * FROM users";
        $statement = $dbh->query($request);
        $user = $statement->fetchAll();
        return $user;
    }
    
    //retourne un booleen correspondant au resultat 
    function deleteUser($id){
        $dbh = new PDO('mysql:host=localhost;dbname=resto_db_bwb', "root", "");
        $request = "DELETE FROM users WHERE id=$id";
        $statement = $dbh->query($request);
        $user = $statement->fetchAll();
        return $user;
    }
    
    //met à jour les données d'un utilisateur dont à l'id est passé en argument 
    function updateUser($id){
        $dbh = new PDO('mysql:host=localhost;dbname=resto_db_bwb', "root", "");
        $request = "UPDATE users SET username='modif', password='modif', email='mo@di.f' WHERE id=$id";
        $statement = $dbh->query($request);
        $user = $statement->fetchAll();
        return $user;
    }
    
?>
