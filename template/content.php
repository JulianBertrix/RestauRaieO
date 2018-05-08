<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <?php include "header.php"; ?>
        <div>            
            <?php
                if(isset($_GET['contents/'])){
                    include 'contents/' . $_GET['contents/'];
                }
                
                else{
                    ?><img src="http://www.restaurant-la-medina.fr/images/carte-pdf1.jpg"><?php
                }
            ?>    
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>
