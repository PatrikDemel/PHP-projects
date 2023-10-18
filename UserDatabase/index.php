<?php
// Starts the session
session_start();

// Checks if the user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Saves session data into variables
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

    // Destroys a session after logout button and redirecting the user to the login page
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        session_destroy();
        header("location: login.php");
    }
} else {
    // Redirects the user to the login page, if they are not logged in
    header("location: login.php");
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
    <link rel="stylesheet" href="./css/styles.css">
    <title>User info</title>
</head>

<body>
    <!-- User section -->
    <section id="user-section">
        <h1 class="heading-1">About
            <?php echo $username ?>
        </h1>
        <div class="user-table">
            <div class="row">
                <div class="col col-bold">
                    First name:
                </div>
                <div class="col">
                    <?php echo $first_name; ?>
                </div>
            </div>
            <div class="row">
                <div class="col col-bold">
                    Last name:
                </div>
                <div class="col">
                    <?php echo $last_name; ?>
                </div>
            </div>
            <div class="row">
                <div class="col col-bold">
                    Email:
                </div>
                <div class="col">
                    <?php echo $email; ?>
                </div>
            </div>
            <div class="row">
                <div class="col col-bold">
                    Username:
                </div>
                <div class="col">
                    <?php echo $username; ?>
                </div>
            </div>
            <div class="row">
                <div class="col col-bold">
                    Password:
                </div>
                <div class="col">
                    <?php echo $password ?>
                </div>
            </div>
            <form action="index.php" method="post">
                <input type="submit" value="Logout" class="logout-button">
            </form>
        </div>
    </section>

</body>

</html>