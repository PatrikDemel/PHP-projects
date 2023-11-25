<?php

/*
 * Pole - auta
 * Zjistěte kolik aut máte na skladě a počet prodaných kusů
 */

$cars = array(
	//značka, prodané množství, skladové množství
	array("Volvo", 22, 18),
	array("BMW", 15, 13),
	array("Skoda", 1203, 763),
	array("Hundai", 2143, 329),
	array("Audi", 22, 8),
	array("Porsche", 4, 1),
	array("Saab", 5, 2),
	array("Land Rover", 17, 15)
);

//reseni
$all_sold = 0;
$all_whouse = 0;

foreach ($cars as $car) {
	$all_sold += $car[1];
	$all_whouse += $car[2];
}
?>