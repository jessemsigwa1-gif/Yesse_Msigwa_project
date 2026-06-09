<?php
include "config.php";

$message = "";

if(isset($_POST['add_product'])){

    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $delivery = $_POST['delivery'];

    $sql = "INSERT INTO products(name,price,stock,delivery_type)
            VALUES('$name','$price','$stock','$delivery')";

    if($conn->query($sql)){
        $message = "✅ Product added successfully!";
    } else {
        $message = "❌ Failed to add product";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>

<style>

body{
    font-family:Arial;
    background:#f4f6f9;
}

.box{
    width:400px;
    background:white;
    margin:50px auto;
    padding:25px;
    border-radius:12px;
    box-shadow:0px 0px 10px rgba(0,0,0,0.1);
}

h2{
    text-align:center;
    color:#2a5298;
}

input, select{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:1px solid #ccc;
    border-radius:6px;
}

button{
    width:100%;
    padding:12px;
    background:#2a5298;
    color:white;
    border:none;
    border-radius:6px;
    cursor:pointer;
}

button:hover{
    background:#1e3c72;
}

.msg{
    text-align:center;
    color:green;
    margin-bottom:10px;
}

.back{
    text-decoration:none;
    display:block;
    text-align:center;
    margin-top:15px;
}

</style>
</head>

<body>

<div class="box">

<h2>➕ Add Product</h2>

<div class="msg">
    <?php echo $message; ?>
</div>

<form method="POST">

    <input type="text" name="name"
    placeholder="Product Name" required>

    <input type="number" name="price"
    placeholder="Price" required>

    <input type="number" name="stock"
    placeholder="Stock Quantity" required>

    <select name="delivery">
        <option value="free">Free Delivery</option>
        <option value="paid">Paid Delivery</option>
    </select>

    <button type="submit" name="add_product">
        Add Product
    </button>

</form>

<a class="back" href="dashboard.php">
← Back To Dashboard
</a>

</div>

</body>
</html>