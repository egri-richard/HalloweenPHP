<?php
require '../vendor/autoload.php';

use Petrik14s\Egridanielr\Halloween\Models\Esemeny;
use Petrik14s\Egridanielr\Halloween\Models\Lako;


$lako1 = new Lako("Feri");
$lako2 = new Lako("Pisti");
$lako3 = new Lako("Józsi");
$lako4 = new Lako("Timi");
$lako5 = new Lako("Ilona");
$lako6 = new Lako("Endre");
$lako7 = new Lako("Alex");

$lakosok = [$lako1, $lako2, $lako3, $lako4, $lako5, $lako6, $lako7];

$datum = new DateTime();

$esemeny1 = new Esemeny("Csokit vagy csínyt", $lako2, $lakosok, $datum);
$esemeny2 = new Esemeny("Jelmezbál", $lako6, $lakosok, $datum);

$esemenyek = [$esemeny1, $esemeny2];

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Halloween-i Rendezvények</title>
</head>
<body>
    
    <?php
    
        foreach ($esemenyek as $e) {
            echo "<div>";
            echo $e->getNev() . "<br>";
            echo "Szervező: " . $e->getSzervezo()->getLakoNev() . "<br>";
            echo "Résztvevők:<ul>";
            foreach($e->getResztvevok() as $resztvevo) {
                echo "<li>". $resztvevo->getLakoNev() ."</li>";
            }
            echo "</ul>";
            echo "Időpont: " . $e->getIdo()->format("Y-m-d");
            echo "</div>";
        }
    
    ?>

</body>
</html>