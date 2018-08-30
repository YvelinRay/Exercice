<!DOCTYPE html>
<!-- 
Titre : EE Revision
Auteur : Yvelin Ray
Date : 30.08.2018
Descritpion : C'est un site comprenant une connexion d'utilisateur, une lisaison
à une base de donnée ainsi qu'un espace de commentaires. Ce site est basé sur le 
principe d'un forum. 

-->
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$user = filter_input(INPUT_POST, 'identifiant', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_STRING);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<form action=\"confirmation.php\" method=\"POST\">
            <fieldset>
                <legend>Connexion</legend>
                <label for=\"identifiant\">Identifiant : </label><input type=\"text\" name=\"uid\"/><br>
                <label for=\"pwd\">Mot de passe : </label><input type=\"password\" name=\"pwd\"/><br>
              <input type=\"submit\" name=\"btnsubmit\" value=\"Valider\" />
            </fieldset>
          </form>";
        ?>
        
        <p><a href="http://www.franceinfo.fr/player/resource/640641-1374817"></a></p>
    </body>
</html>
