<html>
    <head>
        <?php include "layout.php"; ?>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <?php
                include "RadioProgram.php";

                $radioProgram = new RadioProgram();

                $radioProgram->name = "Henkie's radioprogramma";
                $radioProgram->description = "De beste radio van het land!";
                $radioProgram->addSong("liedje1");
                $radioProgram->addSong("liedje2");
                $radioProgram->addSong("liedje3");

                echo($radioProgram->name . "<br>");
                echo($radioProgram->description . "<br><br>");
                echo("Liedjes:<br>");
                foreach ($radioProgram->songs as $song) {
                    echo($song . "<br>");
                }
                ?>
                <br>
                <a href="https://github.com/jmoritdev/jmoritphp/blob/master/radiostation.php">Source code</a>
            </div>
        </div>
    </body>
</html>