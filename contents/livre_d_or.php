<?php
    session_start();
    //include "scripts/add_message.php";
	if(isset($_SESSION['username'])){
        ?><div class="container">
            <h2>Bonjour <?php echo $_SESSION['username']; ?>, Bienvenue sur le livre d'or</h2>
            <form method="POST" action="scripts/add_message.php">
                <textarea  name='message' rows="8" cols="45" placeholder="veuillez ecrire votre message"></textarea><br><br>
                <input type="submit" value="valider" class="btn btn-success">
            </form>
        </div>
        <?php 
            
        ?>
        <h3><?php /*echo $_POST['username'];*/ ?></h3><br>    
        <p><?php /*echo $_POST['message'];*/ ?></p><br><?php      
    }     
    else{
        echo "Veuillez vous inscrire";
    }
    
    $path = $_SERVER['DOCUMENT_ROOT'] . "/datas/message.json";
 
    $json = file_get_contents($path);
    $message_json = json_decode($json, true);
     
    foreach($message_json as $value){
        echo $value;
    }
?>


