<?php
include "config.php";

// DELETE PRODUCT
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM products WHERE id=$id");
    header("Location: products.php");
    exit();
}

$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
<title>Products</title>

<style>

body{
    font-family:Arial;
    background:#f4f6f9;
}

.header{
    background:#2a5298;
    color:white;
    padding:15px;
    display:flex;
    justify-content:space-between;
}

.container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
    padding:30px;
}

.card{
    background:white;
    padding:20px;
    border-radius:12px;
    box-shadow:0px 0px 10px rgba(0,0,0,0.1);
}

.price{
    color:green;
    font-weight:bold;
}

.out{
    color:black;
    font-weight:bold;
}

.btn{
    display:block;
    text-align:center;
    padding:8px;
    margin-top:10px;
    border-radius:6px;
    text-decoration:none;
    color:white;
}

.delete{
    background:blue;
}

</style>
</head>

<body>

<div class="header">
    <h2>Products</h2>
    <a href="dashboard.php" style="color:white;">Dashboard</a>
</div>

<div class="container">

<?php while($row = $result->fetch_assoc()){ ?>

<div class="card">

    <h3><?php echo $row['name']; ?></h3>

    <p class="price">Tsh <?php echo $row['price']; ?></p>

    <p>Stock: 
        <?php 
        if($row['stock'] > 0){
            echo $row['stock'];
        } else {
            echo "<span class='out'>Out of stock</span>";
        }
        ?>
    </p>

    <!-- DELETE BUTTON -->
    <a class="btn delete"
       href="products.php?delete=<?php echo $row['id']; ?>"
       onclick="return confirm('Are you sure you want to delete this product?')">
       Delete Product
    </a>

</div>

<?php } ?>

</div>

</body>
</html>