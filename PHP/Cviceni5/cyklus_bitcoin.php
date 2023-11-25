<?php
/*
 * cyklus
 * Od 1.1.2020 každý měsíc nakupujete bitcoin v odpovídající výši 50 USD.
 * Nákupní cena za 1 BTC je uložena v poli $prices. Hodnota uvedena v USD. Pole je seřazené dle pořadového čísla nákupu.
 *
 * Vypočítejte s využitím cyklů průměrnou, minimální, maximulní nákupní cenu a celkovou hodnotu svého portfólia v BTC i USD.
 *
 */

$prices = array(7195,9509,8552,6403,8744,9427,9139,10904,11300,10743,13060,18753,24671,32273,48691,51416,50133,38642,33702,33455,49250,40386,62541);

//reseni
$total_BTC = 0;
$count = 0;
$min_price = $prices[0];
$max_price = $prices[0];

foreach($prices as $price){
    $total_BTC += $price;
    $count ++;

    if($price < $min_price){
        $min_price = $price;
    }
    if($price > $max_price){
        $max_price = $price;
    }
    
}
$average = $total_BTC / $count;
$total_USD = $total_BTC * 50;
?>
