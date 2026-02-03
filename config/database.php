<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database_name = "clicon";

    $db = mysqli_connect($hostname, $username, $password, $database_name);

    if (!$db) {
        die("Database connection failed: " . mysqli_connect_error());
    }
?>