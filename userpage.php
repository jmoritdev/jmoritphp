<?php
session_start();

if($_SESSION["username"] == ""){
    header("Location: login.php");
}

echo("Welkom, ".$_SESSION["username"]."!<br>");
echo("Je bent een ".$_SESSION["rol"]."<br>");
?>

<!DOCTYPE html>
<html>
    <body>
        <a href="logout.php">Klik hier om uit te loggen</a>
    </body>
</html>

