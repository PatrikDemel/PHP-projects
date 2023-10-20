<?php
/**
 * hledaniMinMax
 * Vytvořte HTMl stránku s vstupním formulářem. Formulář bude obsahovat vstup pro tři číselné proměnné alfa, beta, gama.
 * Uživateli na stránce zobrazíte názvy proměnné a zadané hodnoty.
 * S využitím podmínky naleznete minimální hodnotu a maximální hodnotu. Výsledek zobrazíte uživateli.
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $alfa = $_POST['alfa'];
    $beta = $_POST['beta'];
    $gama = $_POST['gama'];
    $input_array = array($alfa, $beta, $gama);
    $min = min($input_array);
    $max = max($input_array);

    echo "Alfa: $alfa, Beta: $beta, Gama: $gama <br>";
    echo "Min: $min, Max: $max";
}
?>

<!DOCTYPE html>
<html lang='cs'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Hledání MIN MAX</title>
</head>


<body>
    <form action="hledaniMinMax.php" method="post">
        <input type="number" name="alfa" placeholder="alfa">
        <input type="number" name="beta" placeholder="beta">
        <input type="number" name="gama" placeholder="gama">
        <input type="submit" value="Odeslat">
    </form>
</body>

</html>