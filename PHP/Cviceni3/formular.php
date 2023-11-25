<?php
echo '<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulář</title>
    <style>
      p {
        margin: 0;
        font-weight: bold;
      }

      #first-p {
        margin-top: 3rem;
      }
    </style>
  </head>

  <body>
    <form action="formular.php" method="post">
    Jméno a příjmení: <input type="text" name="name"><br>
    Věk: <input type="number" name="age"><br>
    Emailová adresa: <input type="email" name="email"><br>
    Heslo: <input type="password" name="password"><br>
    <input type="submit" value="Odeslat">
    </form>
  </body>
</html>
';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  echo '<p id="first-p">Jméno a příjmení: ' . $_POST['name'] . '</p><br>';
  echo '<p>Věk: ' . $_POST['age'] . '</p><br>';
  echo '<p>Emailová adresa: ' . $_POST['email'] . '</p><br>';
  echo '<p>Heslo: ' . $_POST['password'] . '</p><br>';
}
?>
