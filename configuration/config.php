<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "imbestfoods";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {

    $location = "Location: ./404.php?error=" . $conn->connect_error . "&db=" . $dbname;
    $location = str_replace(PHP_EOL, '', $location);
    header($location);
    exit();
};
