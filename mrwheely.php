<?php
session_start();

include "Car.php";

$carList = array();

$carList[0] = new Car("Rapide S", "Aston-Martin", "196000");
$carList[1] = new Car("Continental GT", "Bentley", "169500");
$carList[2] = new Car("Mulsanne Speed", "Bentley", "305000");
$carList[3] = new Car("Aveo", "Chevrolet", "14200");
$carList[4] = new Car("Camaro", "Chevrolet", "40000");
$carList[5] = new Car("Spark", "Chevrolet", "9500");
$carList[6] = new Car("Berlingo", "Citroen", "20300");
$carList[7] = new Car("C4", "Citroen", "17000");
$carList[8] = new Car("Z-Zero", "Citroen", "29900");
$carList[9] = new Car("Enzo", "Ferrari", "250000");

$carList[10] = new Car("500", "Fiat", "11500");
$carList[11] = new Car("Panda", "Fiat", "9100");
$carList[12] = new Car("Punto", "Fiat", "15600");
$carList[13] = new Car("Accord", "Honda", "26500");
$carList[14] = new Car("Civic", "Honda", "17800");
$carList[15] = new Car("Jazz", "Honda", "13490");
$carList[16] = new Car("LS 600H", "Lexus", "115200");
$carList[17] = new Car("Granturismo", "Maserati", "120000");
$carList[18] = new Car("Classe CLS AMG", "Mercedes", "122000");
$carList[19] = new Car("Classe E Coupe", "Mercedes", "41500");

$carList[20] = new Car("Ampera", "Opel", "39000");
$carList[21] = new Car("Astra", "Opel", "20000");
$carList[22] = new Car("Cascada", "Opel", "25000");
$carList[23] = new Car("Captur", "Renault", "15500");
$carList[24] = new Car("Clio", "Renault", "15000");
$carList[25] = new Car("Espace", "Renault", "30000");
$carList[26] = new Car("Wraith", "Rolls-Royce", "300500");
$carList[27] = new Car("Outback", "Subaru", "37000");
$carList[28] = new Car("WRX STI", "Subaru", "42000");
$carList[29] = new Car("S", "Tesla", "79000");

$brandList = array();

foreach ($carList as $car) {
    if (!in_array($car->getBrand(), $brandList)) {
        $brandList[] = $car->getBrand();
    }
}

if ($_GET["brand"] != "") {
    foreach ($carList as $car) {
        if ($car->getBrand() != $_GET["brand"]) {
            unset($carList[array_search($car, $carList)]);
        }
    }
}

if($_GET["minPrice"] != ""){
    foreach($carList as $car){
        if($car->getPrice() < $_GET["minPrice"]){
            unset($carList[array_search($car, $carList)]);
        }
    }
}

if($_GET["maxPrice"] != ""){
    foreach($carList as $car){
        if($car->getPrice() > $_GET["maxPrice"]){
            unset($carList[array_search($car, $carList)]);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <style>
        body {
            padding-top: 50px;
        }
        .content {
            padding: 40px 15px;
        }
    </style>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MR. Wheely!</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
              integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" 
              crossorigin="anonymous">
    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="mrwheely.php">MR. Wheely</a>
                    
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                       role="button" aria-haspopup="true" aria-expanded="false">PHP Opdrachten <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="barberagenda.php">Kapper agenda</a></li>
                        <li><a href="christmastree.php">Kerstboom</a></li>
                        <li><a href="functions.php">Functies</a></li>
                        <li><a href="monkeybusiness.php">Monkey Business</a></li>
                        <li><a href="mrwheely.php">Mr. Wheely</a></li>
                        <li><a href="radiostation.php">Radiostation</a></li>
                        <li><a href="swimclubs.php">Zwemclubs</a></li>
                    </ul>
                </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="content">
                <form action="mrwheely.php" method="GET">
                    <div class="form-group">
                        <label for="brandSelect">Merk</label>
                        <select id="brandSelect" class="form-control" name="brand">
                            <option/>
                            <?php foreach ($brandList as $brand) { ?>
                                <option value="<?php echo $brand; ?>"><?php echo $brand ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="minPriceSelect">Minimum prijs</label>
                        <input type="text" id="minPriceSelect" name="minPrice" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="maxPriceSelect">Maximum prijs</label>
                        <input type="text" id="maxPriceSelect" name="maxPrice" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Submit"/>
                    </div>
                </form>

                <hr>

                <div class="row">
                    <?php foreach ($carList as $car) { ?>
                        <div class="thumbnail" style="float:left; margin:1%; width:17%;">
                            <div style="height:15vh; width:100%;">
                                <img src="/images/<?php echo $car->getImageName(); ?>.jpg" alt="plaatje" style=" max-width:100%; max-height:100%; vertical-align: central"/>
                            </div>
                            <div class="caption">
                                <?php echo($car->getFullName() . "<br>"); ?>
                                <?php echo("€ " . $car->getPrice() . ",-"); ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <br>
                <a href="https://github.com/jmoritdev/jmoritphp/blob/master/mrwheely.php">Source code</a>
            </div>

        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
                integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" 
        crossorigin="anonymous"></script>
    </body>
</html>

