<?php
session_start();

// checking logged user
if (isset($_SESSION['username'])) {
    header("location: profile.php");
}

// Error message variable
$message = '';

// connecting to the database
$con = mysqli_connect("localhost", "root", "", "usersdb");
if (!$con) {
    die("Connection error" . mysqli_connect_error());
}

// checking the form submit
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // preventing blank fields
    if (empty($username) || empty($password)) {
        $message = 'Error: all fields must not be empty';
    } else {
        // sql command
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        // activating the command
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        // if there is user found
        if (!empty($row)) {
            $_SESSION["first_name"] = $row["first_name"];
            $_SESSION["last_name"] = $row["last_name"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["username"] = $row["username"];
        } else {
            $message = 'Error: username or password is incorrect.';
        }
    }
}
?>

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
    <section class="section" id="login-section">
        <div class="form-container">
            <h2 class="heading-2">User Login</h2>
            <form method="post" action="index.php" class="contact-form">
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
            <p class="error-description">
                <?php echo $message ?>
            </p>
        </div>
    </section>

</body>

</html>