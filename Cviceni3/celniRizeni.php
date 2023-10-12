<?php
echo '<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Celní řízení</title>
  </head>
  <style>
    #result {
        margin: 3rem 0 0 0;
    }

    .row {
        margin: 0;
        font-weight: bold;
    }
  </style>

  <body>
    <form action="celniRizeni.php" method="post">
        Jméno zboží: <input type="text" name="name"><br>
        Cena: <input type="number" name="price">Kč<br>
        DPH: <input type="radio" name="DPH" value="15">15% <input type="radio" name="DPH" value="21">21%<br>
        <input type="submit" value="Odeslat">
    </form>
  </body>
</html>';
?>

<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = intval($_POST['price']);
    $sazba_dan = intval($_POST['DPH']);
    $dan = $price * ($sazba_dan / 100);
    $clo = $price * 0.02;
    $poplatek = 90;
    $celkem = $dan + $clo + $poplatek;

    echo "
    <div id=\"result\">
        <p class=\"row\">Název zboží: $name</p><br>
        <p class=\"row\">Sazba DPH: $sazba_dan %</p><br>
        <p class=\"row\">Clo: $clo Kč</p><br>
        <p class=\"row\">Náklady na pořízení: $poplatek Kč</p><br>
        <p class=\"row\">Celkové náklady k úhradě za dovoz: $celkem Kč</p>
    </div>";
    
}
?>