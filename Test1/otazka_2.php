<?php
$price = 351000;
$ean = 48978246;
$name = 'SuperComputer';
$group =  'Server';

$product = "<b>$name</b> \ $group";

echo "<p>Product $product, ean <a href='http://devserver.local/index.php?product=$ean'> $ean </a>, cena ve výši <b>$price </b> Kč.</p>";
?>
