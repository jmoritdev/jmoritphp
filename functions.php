
<html>
    <head>
        <?php include "layout.php"; ?>
    </head>
    <div class="container">
        <div class="content">
            <?php
            toFarhrenheit(20);
            echo "<br>";
            echo reverseString("Hello Jumbo!");
            echo "<br>";
            echo dividableByThree(3);

            function toFarhrenheit($celsius) {
                echo $celsius . " graden celsius = " . (($celsius * 1.8) + 32) . " graden Fahrenheit.";
            }

            function dividableByThree($number) {
                return ($number % 3 == 0) ? $number . " is deelbaar door 3!" : $number . " is niet deelbaar door 3!";
            }

            function reverseString($string) {
                return strrev($string);
            }
            ?>
            <br>
            <a href="https://github.com/jmoritdev/jmoritphp/blob/master/functions.php">Source code</a>
        </div>
    </div>
</html>

