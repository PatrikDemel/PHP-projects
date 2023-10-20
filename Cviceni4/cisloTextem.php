<?php
/**
 * cisloTextem
 * Za využití formuláře a vhodné podmínky vytvořte script, který přepíše číselnou hodnotu čísel 0-9 na textové vyjádření.
 * Například pokud uživatel zadá hodnotu 1, skript vypíše "jedna".
 * Ošetřete vstup, kdy uživatel chce zadat jiné číslo než 0-9.
 */


//reseni
$result_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number_input = $_POST['input'];
    switch ($number_input) {
        case 0:
            $result_message = 'nula';
            break;
        case 1:
            $result_message = 'jedna';
            break;
        case 2:
            $result_message = 'dva';
            break;
        case 3:
            $result_message = 'tři';
            break;
        case 4:
            $result_message = 'čtyři';
            break;
        case 5:
            $result_message = 'pět';
            break;
        case 6:
            $result_message = 'šest';
            break;
        case 7:
            $result_message = 'sedm';
            break;
        case 8:
            $result_message = 'osm';
            break;
        case 9:
            $result_message = 'devět';
            break;
        default:
            $result_message = 'Chyba: zadejte číslo  0-9';
            break;
    }
}
?>

<!DOCTYPE html>
<html lang='cs'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Číslo textem</title>
</head>


<body>
    <form action="#" method="post" id="cislo-textem-form">
        <label for="number-input">Zadejte číslo:</label>
        <input type="number" name="input" id="number-input">
        <input type="submit" value="Odeslat" id="number-form-input">
        <p id="number-result">
            <?php echo $result_message; ?>
        </p>
    </form>
</body>

</html>