<?php
include "config.php";
session_start();

$result = $conn->query("SELECT * FROM products");
?>

<h2>Available Products</h2>

<?php while($row = $result->fetch_assoc()){ ?>

<div style="border:1px solid #ccc; padding:10px; margin:10px;">
    <h3><?php echo $row['name']; ?></h3>
    <p>Price: <?php echo $row['price']; ?></p>
    <p>Stock: <?php echo $row['stock']; ?></p>

    <?php if($row['stock'] > 0){ ?>
        <form method="POST" action="order.php">
            <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
            <input type="number" name="qty" value="1">
            <button>Order</button>
        </form>
    <?php } else { ?>
        <b>Out of Stock</b>
    <?php } ?>

</div>

<?php } ?>