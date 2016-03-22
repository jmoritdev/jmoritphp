<?php
session_start();

if($_SESSION["rol"] == "Gebruiker" || $_SESSION["username"] == ""){
    header("Location: userpage.php");
}

echo("Welkom op de adminpagina, ".$_SESSION["username"]."!<br>");
echo("Je bent een ".$_SESSION["rol"]."<br>");
?>

<!DOCTYPE html>
<html>
    <body>
        <a href="logout.php">Klik hier om uit te loggen</a>
    </body>
</html>

