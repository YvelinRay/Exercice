<!DOCTYPE html>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if($_SESSION["user"] == $_SESSION["uid"] || $_SESSION["mdp"] == $_SESSION["umdp"]){
            echo "Bonjour ".$_SESSION["uprenom"]." ".$_SESSION["unom"].", vous êtes connectés ";
        }
        else{
        header("Location:index.php");
        }
        ?>
    </body>
</html>


