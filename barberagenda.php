
<?php
$barberAgenda["09:15"] = "Mevr. Pietersen";
$barberAgenda["09:30"] = "Mevr. Willems";
$barberAgenda["09:45"] = "";
$barberAgenda["10:00"] = "Paul van den Broek";
$barberAgenda["10:15"] = "Karel de Meeuw";
$barberAgenda["10:30"] = "";
?>
<!DOCTYPE html>
<html>
    <head><?php include "layout.php" ?></head>
    <body>
        <div class="container">
            <div class="content">
                <table style="border: 1px solid black;"> 
                    <thead>
                        <tr>
                            <td>
                                Tijd:
                            </td>
                            <td>
                                Klant:
                            </td>
                        </tr>
                    </thead>
                    <?php
                    foreach ($barberAgenda as $label => $customer) {
                        ?>    
                        <tr>
                            <td>
                                <?php echo $label; ?>    
                            </td>
                            <td>
                                <?php echo $customer; ?>    
                            </td>
                        </tr>
                        <?php
                    }

                    echo "De volgende tijden zijn nog beschikbaar:" . "<br>";
                    foreach ($barberAgenda as $label => $customer) {
                        if ($customer == "") {
                            echo $label . "<br>";
                        }
                    }
                    ?>
                </table>
                <br>
                <a href="https://github.com/jmoritdev/jmoritphp/blob/master/barberagenda.php">Source code</a>
            </div>
        </div>    
    </body>
</html>    


