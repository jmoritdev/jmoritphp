<html>
    <head>
        <?php include "layout.php" ?>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <?php
                for ($height = 0; $height < 10; $height++) {
                    for ($amountOfSpaces = 20; $amountOfSpaces > $height * 2; $amountOfSpaces -= 2) {
                        echo "&nbsp";
                    }
                    for ($amountOfAsterisks = 0; $amountOfAsterisks < $height; $amountOfAsterisks++) {
                        echo "*";
                    }
                    echo "<br>";
                }
                ?>
                <br>
                <a href="https://github.com/jmoritdev/jmoritphp/blob/master/christmastree.php">Source code</a>
            </div>
        </div>    
    </body>
</html>    

