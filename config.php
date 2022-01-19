<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $conn = mysqli_connect("localhost", "root", "", "admin-db");

    // Check connection
    if (!$conn) {
        echo "<script>alert('Connection failed.');</script>";
    }
?>