<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Orders</title>

<style>

body{
    font-family:Arial;
    background:#f4f6f9;
    margin:0;
}

.header{
    background:#2a5298;
    color:white;
    padding:15px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.header h2{
    margin:0;
}

.back-btn{
    background:white;
    color:#2a5298;
    padding:10px 15px;
    border-radius:6px;
    text-decoration:none;
    font-weight:bold;
}

.back-btn:hover{
    background:#ddd;
}

.container{
    padding:30px;
}

.order-card{
    background:white;
    padding:20px;
    border-radius:12px;
    box-shadow:0px 0px 10px rgba(0,0,0,0.1);
    margin-bottom:20px;
    transition:0.3s;
}

.order-card:hover{
    transform:translateY(-5px);
}

.order-title{
    color:#2a5298;
    margin-bottom:10px;
}

.status{
    display:inline-block;
    padding:6px 12px;
    border-radius:5px;
    background:orange;
    color:white;
    font-size:14px;
    margin-top:10px;
}

.date{
    color:#666;
    margin-top:8px;
}

</style>
</head>

<body>

<div class="header">
    <h2>🧾 Orders</h2>

    <a class="back-btn" href="dashboard.php">
        ← Dashboard
    </a>
</div>

<div class="container">

    <div class="order-card">
        <h3 class="order-title">Order #1001</h3>

        <p>Product: Rice 25KG</p>

        <p>Total: Tsh 85,000</p>

        <div class="status">
            Pending
        </div>

        <div class="date">
            Date: 29 May 2026
        </div>
    </div>

    <div class="order-card">
        <h3 class="order-title">Order #1002</h3>

        <p>Product: Sugar 10KG</p>

        <p>Total: Tsh 45,000</p>

        <div class="status" style="background:green;">
            Delivered
        </div>

        <div class="date">
            Date: 29 May 2026
        </div>
    </div>

</div>

</body>
</html>