<?php
// Dynamic error message
$message = '';

// Checks when the form is submitted
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Saves data into variables
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $auth_password = $_POST['auth_password'];

    // Checks if any of the fields is empty
    if (empty($first_name) || empty($last_name) || empty($email) || empty($username) || empty($password) || empty($auth_password)) {
        $message = 'Error: all fields must not be empty';
    } else {
        // Checks if password and auth_password are the same
        if ($password != $auth_password) {
            $message = 'Error: your passwords must be same';
        } else {
            // Connects to the database
            $conn = mysqli_connect('localhost', 'root', '', 'usersdb');
            if ($conn->connect_error) {
                die('Connection error' . mysqli_connect_error());
            }

            // Checks if username is avalible
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                $message = 'Error: this username is already taken';
            } else {
                // SQL command
                $sql = "INSERT INTO users (first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";

                // Activates the command
                $result = mysqli_query($conn, $sql);
                if ($result === TRUE) {
                    echo '    <section class="section" id="register-section-registered">
                <div class="registered-container">
                    <h2 class="heading-2">User registered</h2>
                    <p class="registered-description">You were successfully registered. You can sign in <a
                            href="index.php">here</a>.</p>
                </div>
            </section>';
                }
            }
            // Ends the connection
            $conn->close();
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
    <!-- Register section -->
    <section class="section" id="register-section">
        <div class="form-container">
            <h2 class="heading-2">User Register</h2>
            <!-- Login form -->
            <form method="post" action="register.php" class="contact-form">
                <div class="contact-row">
                    <i class="fa-solid fa-pen-to-square login-icon"></i>
                    <input type="text" class="contact-input" name="first_name" placeholder="First name...">
                </div>
                <div class="contact-row">
                    <i class="fa-solid fa-pen-to-square login-icon"></i>
                    <input type="text" class="contact-input" name="last_name" placeholder="Last name...">
                </div>
                <div class="contact-row">
                    <i class="fa-solid fa-envelope-circle-check login-icon"></i>
                    <input type="email" class="contact-input" name="email" placeholder="Email...">
                </div>
                <div class="contact-row">
                    <i class="fa-solid fa-user login-icon"></i>
                    <input type="text" class="contact-input" name="username" placeholder="Username...">
                </div>
                <div class="contact-row">
                    <i class="fa-solid fa-lock login-icon"></i>
                    <input type="password" class="contact-input" name="password" placeholder="Password...">
                </div>
                <div class="contact-row">
                    <i class="fa-solid fa-lock login-icon"></i>
                    <input type="password" class="contact-input" name="auth_password" placeholder="Repeat password...">
                </div>
                <input type="submit" value="Register" class="form-button">
            </form>
            <!-- Error messgae -->
            <p class="error-description">
                <?php echo $message ?>
            </p>
        </div>
    </section>

</body>

</html>