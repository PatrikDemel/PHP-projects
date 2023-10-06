<?php 
/*
* Zadání
* Upravte obsah tohoto souboru aby splňoval náležitosti php scriptu. Obsahem bude vámi vytvořený skript, který bude mít definované proměnné $a a $b.
* Do těchto proměnných vložte délky stran obdélníka ($a = 15 cm; $b = 20 cm) a potom vypíšete jeho obvod a obsah.
* Pomocí spojování řetězců dosáhněte následujícího výstupu:
* `Obdélník se stranami o délkách 15 cm a 20 cm má obsah 300 cm2 a obvod 70 cm.`
*/

$a = 15;
$b = 20;

$obvod = 2*($a + $b);
$obsah = $a * $b;

echo 'Obdélník se stranami o délkách ' . $a . ' cm a ' . $b . ' cm má obsah ' . $obsah . ' cm2 a obvod ' . $obvod . ' cm.'

?>
