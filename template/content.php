<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <?php include "header.php"; ?>
        <div>            
            <?php
                if(isset($_GET['path'])){
                    include 'contents/' . $_GET['path'];
                }
                else{
                    include 'contents/home.php';
                }
            ?>    
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>
