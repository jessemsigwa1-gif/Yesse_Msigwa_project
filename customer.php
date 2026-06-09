<?php
include "config.php";

$result = $conn->query("SELECT * FROM users WHERE role='customer'");
?>

<h2>Customers</h2>

<a href="dashboard.php">← Back</a>

<hr>

<?php while($row = $result->fetch_assoc()){ ?>

<div style="padding:10px; border:1px solid #ccc; margin:10px;">
    <h3><?php echo $row['name']; ?></h3>
    <p><?php echo $row['email']; ?></p>
    <p><?php echo $row['phone']; ?></p>
</div>

<?php } ?>