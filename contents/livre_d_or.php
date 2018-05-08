<?php
    session_start();
    
    $_SESSION['username'] = "";
    $_SESSION['password'] = "";
    
	if(($_SESSION['username'] === $_POST['username']) && ($_SESSION['password'] === $_POST['password'])) {
    ?><div class="container">
        <h2>Bonjour <?php echo $_SESSION['username']; ?>, Bienvenue sur le livre d'or</h2>
        <form  method="POST" >
            <input id="user" type="text" placeholder="username" name="username"><br><br>
            <textarea name='message' rows="8" cols="45" placeholder="veuillez ecrire votre message"></textarea><br><br>
            <input type="submit" value="valider" class="btn btn-success">
        </form>
    </div>
    <h3><?php 
        foreach($_POST as $key){
            echo $_POST['username'];
        }
    ?></h3>
    <p><?php 
        foreach($_POST as $key){
            echo $_POST['message'];
        }
    }
     
    if(($_SESSION['username'] !== $_POST['username']) && ($_SESSION['password'] !== $_POST['password'])){
        echo "Veuillez vous inscrire";
        ?><div class="container">
        <form method="POST" action="livre_d_or.php"> 
             <input id="user" type="text" placeholder="username" name="username"><br /> 
             <input type="password" name="password" placeholder="password"/><br /> 
             <input type="submit" value="valider" onClick="<?php $_SESSION['username'] = $_POST['username']; $_SESSION['password'] = $_POST['password']; ?>"/> 
        </form>         
        </div>
        <?php
    }
?>


