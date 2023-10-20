<?php
/**
 * kladneZaporne
 * Vytvořte podmínku, která zobrazí uživateli, zda-li je hodnota proměnné $num kladná nebo záporná.
 * Tip: Vyzkoušejte funčknost skriptu i s různými hodnotami.
 */

$num = -2.14;

//reseni
if ($num > 0) {
  echo 'číslo je kladné';
} elseif ($num < 0) {
  echo 'číslo je záporné';
} else {
  echo 'číslo není ani kladné ani záporné';
}


?>