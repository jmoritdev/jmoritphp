<html>
    <body>
        <form action="index.php" method="POST">
            Gebruikersnaam: <input type="text" name="username"/><br>
            Adres: <input type="text" name="adress"/><br>
            Email: <input type="email" name="email"/><br>
            Wachtwoord: <input type="password" name="password"/><br>
            <input type="submit" value="Verzend"/>
        </form>
    </body>
</html>
<?php
    if(!empty($_POST['username']) && !empty($_POST['adress']) && !empty($_POST['email']) && !empty($_POST['password'])){
        echo("Gebruikersnaam: ".$_POST['username']."<br>");
        echo("Adres: ".$_POST['adress']."<br>");
        echo("Email: ".$_POST['email']."<br>");
        echo("Wachtwoord: ".$_POST['password']."<br>");
    } else {
        echo("Alle velden moeten ingevoerd zijn!");
    }
    

