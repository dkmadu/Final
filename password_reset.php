<?php
session_start();
if (!isset($_SESSION['SESSION_EMAIL']) & empty($_SESSION['SESSION_EMAIL'])) {
    header('Location: recovery.php');
}

$email = $_SESSION['SESSION_EMAIL'];

if (isset($_POST["password_reset"])) {
    include 'config.php';

    $old_password = mysqli_real_escape_string($conn, md5($_POST["old_password"]));
    $new_password = mysqli_real_escape_string($conn, md5($_POST["new_password"]));
    $confirm_password = mysqli_real_escape_string($conn, md5($_POST["confirm_password"]));

    $sql = "SELECT * FROM clients WHERE email='{$email}'";
    $passres = mysqli_query($conn, $sql);
    $passr = mysqli_fetch_assoc($passres);

    if ($old_password == $passr['password']) {
        if ($new_password == $confirm_password) {
            $passusql = "UPDATE `clients` SET password='{$new_password}' WHERE email='{$email}'";
            $passures = mysqli_query($conn, $passusql);
            if ($passures) {
                echo "<script>alert('Password Updated.');</script>";
                header("Location: index.php");
            }
        }
    } else {
        echo "<script>alert('Current Password Not Matching.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Client Recovery</title>
</head>

<body>
    <div class="header">
        <img src="logo.jpeg" alt="logo" />
    </div>
    <div class="devider"></div>
    <!-- <hr class="rounded"> -->
    <div class="container">
        <div class="wrapper">
            <h2 class="title">Password Reset</h2>
            <form action="" method="post" class="form">
                <div class="input-field">
                    <input type="password" name="old_password" id="old_password" class="input" placeholder="Enter your old password" required>
                    <label for="old_password" class="input-label">Old Password</label>
                </div>
                <div class="input-field">
                    <input type="password" name="new_password" id="new_password" class="input" placeholder="Enter your new password" required>
                    <label for="new_password" class="input-label">New Password</label>
                </div>
                <div class="input-field">
                    <input type="password" name="confirm_password" id="confirm_password" class="input" placeholder="Enter your new password again" required>
                    <label for="confirm_password" class="input-label">Confirm Password</label>
                </div>
                <button class="btn" name="password_reset">Submit</button>
                <a class="cancel" href="password_reset.php">Cancel</a>
            </form>
        </div>
        <!-- <div class="devider"></div> -->
    </div>
    <div class="devider2"></div>
    <div class="footer-text">Copyright @ 2021 Business Support CRM Web Application <br>www.businesssupportwebapplication.com</div>
</body>

</html>