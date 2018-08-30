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
$mdp = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_STRING);

$_SESSION["user"] = $user;
$_SESSION["mdp"] = $mdp;
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
                <label for=\"mdp\">Mot de passe : </label><input type=\"password\" name=\"mdp\"/><br>
              <input type=\"submit\" name=\"btnsubmit\" value=\"Valider\" />
            </fieldset>
          </form>";
        ?>
        <p><a href="login.php">Pas encore inscrit?</a></p>
    </body>
</html>
