<?php
session_start();

if(!isset($_SESSION['username'])){
    ?><div class="container">
        <form method="POST" action="/scripts/login.php"> 
             <input id="user" type="text" placeholder="username" name="username"><br /> 
             <input type="password" name="password" placeholder="password"/><br /> 
             <input type="submit" value="valider"/> 
        </form>         
    </div><?php
}
else{
    ?><p style="color: white"><?php echo "bonjour " . $_SESSION['username']; ?></p><?php
}

?>
