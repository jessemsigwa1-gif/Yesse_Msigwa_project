<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Products</title>
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
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:20px;
padding:30px;
}
.card{
background:white;
border-radius:12px;
padding:20px;
box-shadow:0px 0px 10px rgba(0,0,0,0.1);
transition:0.3s;
}
.card:hover{
transform:translateY(-5px);
}
.price{
color:green;
font-size:20px;
font-weight:bold;
}
.stock{
color:#555;
}
.delivery{
margin-top:10px;
padding:5px 10px;
display:inline-block;
border-radius:5px;
background:#2a5298;
color:white;
font-size:14px;
}
button{
width:100%;
margin-top:15px;
padding:10px;
border:none;
background:#2a5298;
color:white;
border-radius:6px;
cursor:pointer;
font-size:15px;
}
button:hover{
background:#1e3c72;
}
</style>
</head>
<body>
<div class="header">
<h2>🛍 Products</h2>
<a class="back-btn" href="dashboard.php">
← Dashboard
</a>
</div>
<div class="container">
<?php
$result = $conn->query("SELECT * FROM products");
while($row = $result->fetch_assoc()){
?>
<div class="card">
<h3><?php echo $row['name']; ?></h3>
<p class="price">
Tsh <?php echo $row['price']; ?>
</p>
<p class="stock">
Stock: <?php echo $row['stock']; ?>
</p>
<div class="delivery">
Delivery: <?php echo $row['delivery_type']; ?>
</div>
<button>Add To Cart</button>
</div>
<?php } ?>
</div>
</body>
</html>