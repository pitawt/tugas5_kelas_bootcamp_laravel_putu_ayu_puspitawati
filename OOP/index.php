<?php
//require('animal.php');
require('Frog.php');
require('Ape.php');


$animal = new Animal("ayam");
echo "Release 0"."<br>";
echo $animal->name."<br>";
echo $animal->legs."<br>";
echo $animal->cold_blooded."<br><br>";

echo "Release 1"."<br>";

$binatang = new Katak("katak");
echo $binatang->name."<br>";
echo $binatang->legs."<br>";
echo $binatang->cold_blooded."<br>";
$binatang->jump();
echo "<br><br>";


$hewan = new Ape("Kera Sakti");
echo $hewan->name."<br>";
echo $hewan->legs."<br>";
echo $hewan->cold_blooded."<br>";
$hewan->yell();
echo "<br>";


?>