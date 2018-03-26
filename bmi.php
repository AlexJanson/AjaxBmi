<?php
$gewicht = $_GET["gewicht"];
$lengte = $_GET["lengte"];

$lengtem = $lengte/100;
$bmi = round($gewicht/($lengtem*$lengtem), 1);
echo '<p>Jouw gewicht is: ' . $gewicht . '</p>' .
     '<p>Jouw lengte is: ' . $lengte . '</p>' . 
     '<p>Jouw BMI is: ' . $bmi . '</p>';
switch($bmi) {
    case ($bmi <= 18.5):
        echo 'Ondergewicht';
        break;
    case ($bmi > 18.5 && $bmi <= 25):
        echo 'Normaal/gezond';
        break;
    case ($bmi > 25 && $bmi <= 27):
        echo 'Licht overgewicht';
        break;
    case ($bmi > 27 && $bmi <= 30):
        echo 'Matig overgewicht';
        break;
    case ($bmi > 30 && $bmi <= 40):
        echo 'Obesitas';
        break;
    case ($bmi > 40):
        echo 'Morbide obesitas';
        break;
    default:
        echo 'N/A';
        break;
}