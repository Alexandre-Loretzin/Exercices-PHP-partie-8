<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


    <?php
        echo "Vous utilisez ".$_SERVER["HTTP_USER_AGENT"];
        echo "<br>";
        echo "Vous êtes sur ".$_SERVER["SERVER_NAME"];
        echo "<br>";
        echo "Votre IP est :".$_SERVER["REMOTE_ADDR"];
        echo "<br>";
    $_SESSION["lastname"] = "Loretzin";
    $_SESSION["firstname"] = "Alexandre";
    $_SESSION["age"] = "31";
    echo "<br>";

    ?>
    
<form action="document2.php" method = "post">
    <label for="login"> Login</label>
    <input type="text" name="login" required >
    <label for="password"> Password</label>
    <input type="password" name="mdp" required >
    <input type="submit" name="submit" >
</form>


<form action="index.php" method = "post">
    <label for="login"> Modifier votre Login</label>
    <input type="text" name="loginUpdate"  >
    <label for="password">Modifier votre Password</label>
    <input type="password" name="mdpUpdate"  >
    <input type="submit" name="submit" >
</form>

<?php 
 if (isset($_POST["loginUpdate"]) AND isset($_POST["mdpUpdate"])){
    $loginUpdate = $_POST["loginUpdate"];
    $mdpUpdate = $_POST["mdpUpdate"]; 
    setcookie("login", $loginUpdate, time() + (86400 * 30), "/" );
    setcookie("mdp", $mdpUpdate, time() + (86400 * 30), "/" );
    }

?>

<a href="document2.php"> envoyer les variables de la session </a>


</body>
</html>