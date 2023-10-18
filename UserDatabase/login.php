<?php
// Error message dynamic variable
$message = '';

// Starts a session
session_start();

// Checks if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connects with the database
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "usersdb";
    $conn = new mysqli($host, $username, $password, $dbname);
    if ($conn->connect_error) {
        die('Connection error' . mysqli_connect_error());
    }

    // Saves the inputs into variables
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Makes a command for searching the user in the database
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    $row = $result->fetch_array();

    // Checks if the user exists 
    if ($result->num_rows == 1) {
        // Saves users data into session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        // Redirects user to the users page
        header("location: index.php");
    } else {
        $message = 'Error: wrong username or password';
    }

    // Ends connection with the database
    $conn->close();
}
?>


<!-- HTML -->
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <link rel='stylesheet' href='./css/styles.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>User Login</title>
</head>

<body>
    <!-- Login section -->
    <section class="section" id="login-section">
        <div class="form-container">
            <h2 class="heading-2">User Login</h2>
            <!-- Login form -->
            <form method="post" action="login.php" class="contact-form">
                <div class="contact-row">
                    <i class="fa-solid fa-user login-icon"></i>
                    <input type="text" class="contact-input" name="username" placeholder="Enter your username...">
                </div>
                <div class="contact-row">
                    <i class="fa-solid fa-lock login-icon"></i>
                    <input type="password" class="contact-input" name="password" placeholder="Enter your password...">
                </div>
                <input type="submit" value="Log in" class="form-button">
            </form>
            <!-- Error messgae -->
            <p class="error-description">
                <?php echo $message ?>
            </p>
            <p class="register-offer">Not a meber? <a href="register.php" class="form-link">register</a> here.</p>
        </div>
    </section>

</body>

</html>