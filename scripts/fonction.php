<?php
    function getDropdown(){
        ?><div class="dropdown-content dropdown-menu" aria-labelledby="dropdownMenuButton" ><?php
            $carte = "./contents/cartes/";
            $dropDown = scandir($carte);
            
            foreach($dropDown as $value){
                $nom = basename($value, '.php');
                if(!in_array($value, array(".",".."))){
                    echo "</li><a style='color: black' class='dropdown-item' href='?path=/cartes/" . $value . "'>" . $nom . " " . "</a></li>";                       
                }
            } 
        ?></div><?php       
    }
    
    function getNavbar(){
        ?><nav class="navbar navbar-inverse navbar-expand-lg navbar-light">
            <div class="container-fluid navbar">
                <ul class="nav navbar-nav">
                    <?php
                        $content = "./contents/";
                        $page = scandir($content);
                        
                        foreach($page as $value){
                            $nom = basename($value, '.php');
                            if(!in_array($value, array(".",".."))){
                                if($value !== "cartes"){
                                    echo "</li><a style='color: silver' class='nav-link' href='?path=" . $value . "'>" . $nom . " " . "</a></li>";
                                }
                                else{
                                    ?><div class="dropdown">
                                        <button class="dropbtnclass=" btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $value; 
                                            ?><i class="fa fa-caret-down"></i>
                                        </button><?php
                                        getDropdown();
                                    ?></div><?php                                   
                                }                              
                            }
                        }                         
                    ?>
                </ul>
            </div><?php
            include "scripts/connexion.php";
        ?></nav><?php
    }
    
    function getContent(){
        if(isset($_GET['path'])){
            include 'contents/' . $_GET['path'];
        }
        else{
            include 'contents/home.php';
        }        
    }
    
    function getUserForm(){
        if(isset($_SESSION['username'])){
        ?><div class="container">
            <h2>Bonjour <?php echo $_SESSION['username']; ?>, Bienvenue sur le livre d'or</h2>
            <form method="POST" action="scripts/add_message.php">
                <textarea  name='message' rows="8" cols="45" placeholder="veuillez ecrire votre message"></textarea><br><br>
                <input type="submit" value="valider" class="btn btn-success">
            </form>
        </div><?php   
        }     
        else{
            echo "Veuillez vous inscrire pour poster un message";
        }
    }
    
    function addUser($user){
        $path = $_SERVER['DOCUMENT_ROOT'] . "/datas/user.json";
        
        $json = file_get_contents($path, true);
        $users = json_decode($json);
        
        array_push($users, $user);
        
        $liste = json_encode($users);
        file_put_contents($path, $liste);       
    }
    
    function addMessage($message){
        $path = "../datas/message.json";
     
        $json = file_get_contents($path);
        $message_json = json_decode($json, true);
           
        array_push($message_json, $message);
         
        $liste = json_encode($message_json);
        file_put_contents($path, $liste);
    }
    
    function getUser(){
        $path = $_SERVER['DOCUMENT_ROOT'] . "/datas/user.json";
    
        $json = file_get_contents($path);
        $user = json_decode($json, true);
        
        if(!isset($_SESSION['username'])){
            foreach($user as $value){ 
                if($value['username'] === $_POST['username'] && $value['password'] === $_POST['password']){
                    $_SESSION['username'] = $_POST['username'];
                }
            }
        }
    }
    
    function getMessage(){
        $path = $_SERVER['DOCUMENT_ROOT'] . "/datas/message.json";
 
        $json = file_get_contents($path);
        $message_json = json_decode($json, true);
        
        foreach($message_json as $value){ 
            ?><h4><?php echo $value['user']; ?></h4><br>
            <p><?php echo $value['message']; ?></p><br><?php
        }
    }
?>
