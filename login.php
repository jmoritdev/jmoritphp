<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$adminname = "admin";
$adminpass = "admin";

$normalUserName = "gebruiker";
$normalUserPass = "gebruiker";

if (isset($username) && strcmp($username, "")) {
    if ($username == $adminname && $password == $adminpass) {
        $_SESSION["username"] = $username;
        $_SESSION["rol"] = "Admin";
        header("Location: adminpage.php");
    }
    if ($username == $normalUserName && $password == $normalUserPass) {
        $_SESSION["username"] = $username;
        $_SESSION["rol"] = "Gebruiker";
        header("Location: userpage.php");
    }
    echo("Logingegevens onbekend, probeer het opnieuw.");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include "layout.php"; ?>
    </head>
    <body>
        <div class="container">
            <div class="content">
                log in met admin, admin om in te loggen als admin, en gebruiker, gebruiker om als gebruiker in te loggen.
                <form id="form" action="login.php" method="post">
                    Username: <input type="text" name="username" /> <br />
                    Password: <input type="password" name="password" /> <br />
                    <input type="submit" value="Login" name="Submit" />
                </form>
            </div></div>
    </body>
</html>