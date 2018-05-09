<?php
    session_start();
     
	if(isset($_SESSION['username'])){
        ?><div class="container">
            <h2>Bonjour <?php echo $_SESSION['username']; ?>, Bienvenue sur le livre d'or</h2>
            <form  method="POST" >
                <input id="user" type="text" placeholder="username" name="username"><br><br>
                <textarea name='message' rows="8" cols="45" placeholder="veuillez ecrire votre message"></textarea><br><br>
                <input type="submit" value="valider" class="btn btn-success">
            </form>
        </div>
        <h3><?php echo $_POST['username']; ?></h3><br>    
        <p><?php echo $_POST['message']; ?></p><br><?php      
    }     
    else{
        echo "Veuillez vous inscrire";
    }
?>


