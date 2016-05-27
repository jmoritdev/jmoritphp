<?php
$swimclub["De spartelkuikens"] = 25;

$swimclub["De waterbuffels"] = 32;

$swimclub["Plonsmderin"] = 11;

$swimclub["Bommetje"] = 23;
?>

<html>
    <head>
        <?php include "layout.php"; ?>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <table style="border: 1px solid black;">
                    <thead>
                        <tr>
                            <td>
                                Zwemclub:
                            </td>    
                            <td>
                                Ledenaantal:
                            </td>
                        </tr>
                    </thead>
                    <?php
                    foreach ($swimclub as $label => $members) {
                        ?>
                        <tr>
                            <td>
                                <?php
                                echo $label;
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $members;
                                ?>
                            </td>
                            <td>
                                <?php
                                for ($x = 1; $x < $members / 5; $x++) {
                                    echo "[:)] ";
                                }
                                if ($members % 5 == 0) {
                                    echo "[:)] ";
                                }
                                ?>
                            </td>
                        </tr>   
                        <?php
                    }
                    ?>
                </table>  
                <br>
                <a href="https://github.com/jmoritdev/jmoritphp/blob/master/swimclubs.php">Source code</a>
            </div>
        </div>
    </body>
</html>


