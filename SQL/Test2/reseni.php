<?php
$listEmployee = array(
    array(
        'Osobní číslo' => 77918,
        'Zaměstnanec'=> 'Petr Novák',
        'Odměna' => 500,
        'Manager' => 99101,
        'Pohlaví' => 'M'
    ),
    array(
        'Osobní číslo' => 90171,
        'Zaměstnanec'=> 'Jana Dvořáková',
        'Odměna' => 600,
        'Manager' => 77918,
        'Pohlaví' => 'Z'
    ),
    array(
        'Osobní číslo' => 98172,
        'Zaměstnanec'=> 'Ludmila Cyklická',
        'Odměna' => 800,
        'Manager' => 77918,
        'Pohlaví' => 'Z'
    )
)

// Změňte jména proměnných
function calcSumOfBonus($array){
    $sumbonuses = 0;

    foreach($array as $value){
        $sumbonuses += $value['Odměna'];
    }

    return "<p>Pro vyplacení odměn bude zapotřebí alokovat $sumbonuses Kč</p>";
}

echo calcSumOfBonus($listEmployee);


?>