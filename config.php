<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "jessenizer_food_supply";

$conn = new mysqli($host, $user, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>