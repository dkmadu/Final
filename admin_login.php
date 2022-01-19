<?php
session_start();
if (isset($_SESSION["SESSION_EMAIL"])) {
    header("Location: welcome.php");
}

if (isset($_POST["login"])) {
    include 'config.php';

    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["password"]));

    $sql = "SELECT * FROM clients WHERE email='{$email}' AND password='{$password}'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count === 1) {
        $_SESSION["SESSION_EMAIL"] = $email;
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Your Login details is incorrect.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style 2.css">
    <title>Admin SignIn</title>
</head>

<body>
    <div class="header">
        <img src="logo.jpg" alt="logo" />
    </div>
    <div class="devider"></div>
    <!-- <hr class="rounded"> -->
    <div class="container">
        <div class="wrapper">
            <h2 class="title">Sign In</h2>
            <form action="" method="post" class="form">
                <div class="input-field">
                    <input type="email" name="email" id="email" class="input" placeholder="Enter your email" required>
                    <label for="email" class="input-label">Email</label>
                </div>
                <div class="input-field">
                    <input type="password" name="password" id="password" class="input" placeholder="Enter your password" required>
                    <label for="password" class="input-label">Password</label>
                    
                </div>
                <p class ="fogot"> <a href="recovery.php">Foget Password?</a></p>
                <p class="create">No account? <a href="register.php">Create one</a>!</p>
                <button class="btn" name="login">Submit</button>
                <a class="cancel" href="index.php">Cancel</a>
            </form>
        </div>
        <!-- <div class="devider"></div> -->
    </div>
    <div class="devider2"></div>
    <div class="footer-text">Copyright @ 2021 Business Support CRM Web Application <br>www.businesssupportwebapplication.com</div>
</body>

</html>