<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <?php
                $content = "./contents/";
                $page = scandir($content);
                
                foreach($page as $value){
                    $nom = basename($value, '.php');
                    if(!in_array($value, array(".",".."))){
                        echo "</li><a href='contents/" . $value . "'>" . $nom . " " . "</a></li>";
                    }
                } 
            ?>
        </ul>
    </div>
</nav>
