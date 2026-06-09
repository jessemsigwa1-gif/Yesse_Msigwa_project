<?php
session_start();
include "config.php";

$user_id = $_SESSION['user_id'];
$product_name = $_POST['product_name'];
$price = $_POST['price'];
$quantity = 1;

$sql = "INSERT INTO myOrder (user_id, product_name, quantity, price, status)
VALUES ('$user_id', '$product_name', '$quantity', '$price', 'pending')";

if ($conn->query($sql)) {
    header("Location: my_orders.php");
    exit();
} else {
    echo "Failed to place order";
}
?>