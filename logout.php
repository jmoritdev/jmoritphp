<?php
session_start();
$_SESSION["username"] = "";
$_SESSION["rol"] = "";
session_destroy();

?>

<!DOCTYPE html>
<html>
    <body>
        Je bent nu uitgelogd! <br>
        <a href="login.php">Ga terug naar loginpagina</a>
    </body>
</html>