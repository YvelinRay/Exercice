<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$uprenom = filter_input(INPUT_POST, 'uprenom', FILTER_SANITIZE_STRING);
$unom = filter_input(INPUT_POST, 'unom', FILTER_SANITIZE_STRING);
$uid = filter_input(INPUT_POST, 'uid', FILTER_SANITIZE_STRING);
$umdp = filter_input(INPUT_POST, 'umdp', FILTER_SANITIZE_STRING);

$_SESSION["uprenom"] = $uprenom;
$_SESSION["unom"] = $unom;
$_SESSION["uid"] = $uid;
$_SESSION["umdp"] = $umdp;

echo "<form action=\"index.php\" method=\"POST\">
            <fieldset>
                <legend>Inscription</legend>
                <label for=\"uprenom\">Prenom : </label><input type=\"text\" name=\"uprenom\"/><br>
                <label for=\"unom\">Nom : </label><input type=\"text\" name=\"unom\"/><br>
                <label for=\"uid\">Identifiant : </label><input type=\"text\" name=\"uid\"/><br>
                <label for=\"umdp\">Mot de passe : </label><input type=\"text\" name=\"umdp\"/><br>
                <input type=\"submit\" name=\"btnsubmit\" value=\"Valider\" />
            </fieldset>
          </form>";

