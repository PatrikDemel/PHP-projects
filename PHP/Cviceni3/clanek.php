<?php
echo '<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Článek</title>
        <style>
            #result {
                margin-top: 3rem;
            }
            .row {
                margin: 0;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <form action="clanek.php" method="get">
            <select name="language-select" id="select-language">
                <option value="cs">Čeština</option>
                <option value="en">Angličtina</option>
                <option value="de">Němčina</option>
                <option value="ru">Ruština</option>
                <option value="hu">Maďarština</option>
            </select>
            <select name="article-select" id="select-article">
                <option value="1">Fuckupy v IT</option>
                <option value="2">Domácí automatizace</option>
                <option value="3">Umělá inteligence v domácnosti</option>
            </select>
            <input type="submit" value="Odeslat">
        </form>
    </body>
</html>';
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $language_list = $_GET['language-select'];
    $article_id = $_GET['article-select'];

    echo "<div id='result'>
    <p class='row'>Zvolená jazyková mutace: $language_list</p><br>
    <p class='row'>ID článku: $article_id</p>
</div>";
}
?>