<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    echo $_SESSION["lastname"]."<br>";
    echo $_SESSION["firstname"] ."<br>";
    echo $_SESSION["age"] ."<br><br>";


    // Pour afficher le COOKIE, la page doit etre rafraichi ...
    if (isset($_POST["login"]) AND isset($_POST["mdp"])){
        $cookielogin = $_POST["login"];
        $cookiemdp = $_POST["mdp"]; 
        setcookie("login", $cookielogin, time() + (86400 * 30), "/" );
        setcookie("mdp", $cookiemdp, time() + (86400 * 30), "/" );
        }

    echo "Votre Login est : ".$_COOKIE["login"]."<br>";
    echo "Votre MDP est :".$_COOKIE["mdp"];
    
?>
</body>
</html>