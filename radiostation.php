<?php
include "RadioProgram.php";

$radioProgram = new RadioProgram();

$radioProgram->name = "Henkie's radioprogramma";
$radioProgram->description = "De beste radio van het land!";
$radioProgram->addSong("liedje1");
$radioProgram->addSong("liedje2");
$radioProgram->addSong("liedje3");

echo($radioProgram->name."<br>");
echo($radioProgram->description."<br><br>");
echo("Liedjes:<br>");
foreach($radioProgram->songs as $song){
    echo($song."<br>");
}
