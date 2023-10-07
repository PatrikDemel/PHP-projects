<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
        <link rel="stylesheet" href="./css/styles.css">
        <title>Můj první PHP formulář UwU</title>
    </head>


    <body>
        <section id="form-section">
            <form method="post" action="index.php" id="contact-form">
                <h1 class="heading-1">Contact form</h1>
                <input type="text" class="form-input" name="name" placeholder="Name" required>
                <input type="email" class="form-input" name="email" placeholder="Email" required>
                <button class="btn" type="submit">Send</button>
            </form>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $name = $_REQUEST['name'];
                    $email = $_REQUEST['email'];

                    echo '
                    <div class="welcome-box">
                        <h1 class="heading-1">Welcome, '."$name". '</h1>
                        <p class="paragraph">Your email address is: '."$email".'</p>
                    </div>';
                }
            ?>
        </section>
    </body>
</html>