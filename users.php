<?php
session_start();
include "config.php";

if($_SESSION['role'] != 'customer'){
    header("Location: login.php");
    exit();
}
?>

<h2>👤 Welcome back to Jessenizer Food Supply</h2>

<p>Hello <?php echo $_SESSION['name']; ?></p>

<a href="view_products.php">🛍️ View Products</a><br>
<a href="my_orders.php">📦 My Orders</a><br>
<a href="logout.php">🚪 Logout</a>