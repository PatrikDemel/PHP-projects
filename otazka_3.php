<html>
<head>
    <title>Test náhradní</title>
</head>
<body>
    <form action="otazka_3.php" method="post">
        Číslo faktury: <input type="text" name="cislo_faktury"><br>
        Výše platby: <input type="number" name="vyse_platby"><br>
        <input type="submit" value="Odeslat">
    </form>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $kurz = 24.68;

    $vyse_platby = $_POST["vyse_platby"];
    $prevedena_castka = $vyse_platby * $kurz;

    echo "Zbývá Vám zaplatit $prevedena_castka CZK";
}

?>