<?php
session_start();
include "config.php";
include "products.php";

if($_SESSION['role'] != 'admin'){
    header("Location: login.php");
    exit();
}
?>

<h2>👨‍💼 Welcome back to Jessenizer Food Supply (Admin)</h2>

<a href="add_product.php">➕ Add Product</a><br>
<a href="products.php">🛍️ Manage Products</a><br>
<a href="orders.php">📦 View Orders</a><br>
<a href="logout.php">🚪 Logout</a>