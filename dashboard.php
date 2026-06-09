<?php
session_start();

if(!isset($_SESSION['role'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<style>

body{
    font-family:Arial;
    background:#FFC0CB;
    margin:0;
}

.header{
    background:#0000FF;
    color:white;
    padding:15px;
    text-align:center;
}

.container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
    gap:20px;
    padding:40px;
}

/* cards */
.card{
    background:white;
    padding:25px;
    border-radius:12px;
    text-align:center;
    box-shadow:0px 0px 10px rgba(0,0,0,0.1);
    text-decoration:none;
    color:black;
    transition:0.3s;
}

.card:hover{
    background:#800080;
    color:green;
    transform:translateY(-5px);
}

/* logout */
.logout{
    position:absolute;
    top:15px;
    right:20px;
    background:green;
    color:white;
    padding:10px 15px;
    border-radius:8px;
    text-decoration:none;
}

</style>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

<div class="header">
    <h2>🛍️ JESSENIZER FOOD SUPPLY SYSTEM</h2>
</div>

<a href="logout.php" class="logout">
    <i class="fa fa-sign-out"></i> Logout
</a>

<div class="container">

<?php if($_SESSION['role'] == 'admin'){ ?>

    <!-- ADMIN FEATURES -->
    <a href="add_product.php" class="card">
        <i class="fa fa-plus"></i>
        <h3>Add Product</h3>
    </a>

    <a href="products.php" class="card">
        <i class="fa fa-box"></i>
        <h3>Manage Products</h3>
    </a>

    <a href="orders.php" class="card">
        <i class="fa fa-list"></i>
        <h3>View Orders</h3>
    </a>

<?php } else { ?>

    <!-- USER FEATURES -->
    <a href="view_products.php" class="card">
        <i class="fa fa-shopping-cart"></i>
        <h3>Buy Products</h3>
    </a>

    <a href="my_orders.php" class="card">
        <i class="fa fa-receipt"></i>
        <h3>My Orders</h3>
    </a>

<?php } ?>

</div>

</body>
</html>