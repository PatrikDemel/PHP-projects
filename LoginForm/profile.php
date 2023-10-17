<?php
session_start();
if (isset($_SESSION['username'])) {
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $username = $_SESSION['username'];
} else {
    header("location: index.php");
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
    <title>User info</title>
</head>


<body>
    <section class="section" id="user-section">
        <h1 class="heading-1">User info</h1>
        <p>
            <?php echo $first_name ?>
        </p>
        <form action="profile.php" method="post">
            <input type="submit" value="Logout">
        </form>
    </section>

</body>

</html>