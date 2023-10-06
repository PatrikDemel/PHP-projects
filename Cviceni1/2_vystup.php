<?php
// Blok cvičení 01 - Proměnné a výstupy

/*
 * Deklarujte proměnnou A, B
 * Pro proměnné A a B udělejte script, který provede matematickou operaci sčítání, násobení a každý výsledek uloží do samostatné proměnné.
 * Každý výsledek zobrazte na samostatném řádku.
 */


 $A = 10;
 $B = 20;

 function math() {
    $soucet = $A + $B;
    $nasobeni = $A * $B;

    echo "Výsledek součtu: $soucet \nVýsledek násobení: $nasobeni"
 }


 ?>