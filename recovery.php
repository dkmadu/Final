<?php
session_start();

if (isset($_POST["recovery"])) {
    include 'config.php';

    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $date_of_birth = mysqli_real_escape_string($conn, $_POST["date_of_birth"]);

    $sql = "SELECT * FROM clients WHERE email='{$email}' AND date_of_birth='{$date_of_birth}'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count === 1) {
        $_SESSION["SESSION_EMAIL"] = $email;
        header("Location: password_reset.php");
    } else {
        echo "<script>alert('Your entered details is incorrect.');</script>";
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
            <h2 class="title">Account Recovery</h2>
            <p class="sub_header">If you forgot your password</p>
            <form action="" method="post" class="form">
                <div class="input-field">
                    <input type="email" name="email" id="email" class="input" placeholder="Enter your user name/ email" required>
                    <label for="email" class="input-label">Type User name/ Email</label>
                </div>
                <div class="input-field">
                    <input type="date_of_birth" name="date_of_birth" id="date_of_birth" class="input" placeholder="Enter your Date of birth" required>
                    <label for="date_of_birth" class="input-label">Date of birth</label>
                </div>
                <p class="create">*After your submit check your mail for account recovery link.</p>
                <button class="btn" name="recovery">Submit</button>
                <a class="cancel" href="recovery.php">Cancel</a>
            </form>
        </div>
        <!-- <div class="devider"></div> -->
    </div>
    <div class="devider2"></div>
    <div class="footer-text">Copyright @ 2021 Business Support CRM Web Application <br>www.businesssupportwebapplication.com</div>
</body>

</html>