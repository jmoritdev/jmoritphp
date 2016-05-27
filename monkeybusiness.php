<?php
include "MonkeyOverview.php";
include "Monkey.php";

$mo = new MonkeyOverview();
$mo->addMonkey(new Monkey("Baviaan"));
$mo->addMonkey(new Monkey("Guereza"));
$mo->addMonkey(new Monkey("Langoer"));
$mo->addMonkey(new Monkey("Neusaap"));
$mo->addMonkey(new Monkey("Tamarin"));
$mo->addMonkey(new Monkey("Brulaap"));
$mo->addMonkey(new Monkey("Halfaap"));
$mo->addMonkey(new Monkey("Mandril"));
$mo->addMonkey(new Monkey("Oeakari"));
$mo->addMonkey(new Monkey("Faunaap"));
$mo->addMonkey(new Monkey("Hoelman"));
$mo->addMonkey(new Monkey("Meerkat"));
$mo->addMonkey(new Monkey("Oormaki"));
$mo->addMonkey(new Monkey("Gorilla"));
$mo->addMonkey(new Monkey("Kuifaap"));
$mo->addMonkey(new Monkey("Mensaap"));
$mo->addMonkey(new Monkey("Spinaap"));
?>

<!DOCTYPE html>
<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
        <?php include "layout.php" ?>
    </head>
    <style>
        h2{
            font-family: Bangers, cursive; 
        }
    </style>
    <body>
        <div class="container">
            <div class="content">
                <img src="/images/monkey-business.jpg"/><br>
                <h1 style="font-family:arial">Select your monkey!</h1><br>
                <img src="/images/monkey_swings.png"/><br>

                <?php foreach ($mo->getMonkeyList() as $monkey) { ?>
                    <h2>
                        <a href="https://www.google.nl/search?q=<?php echo($monkey->getName()) ?>&tbm=isch"><?php echo ($monkey->getName()); ?></a>
                    </h2><br>
                <?php } ?>
                <br>
                <a href="https://github.com/jmoritdev/jmoritphp/blob/master/monkeybusiness.php">Source code</a>
            </div>
        </div>
    </body>
</html>