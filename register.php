<?php
include "config.php";

$msg = "";

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // check if email exists
    $check = $conn->query("SELECT * FROM users WHERE email='$email'");

    if($check->num_rows > 0){
        $msg = "Email already exists!";
    } else {

        $sql = "INSERT INTO users (name, email, phone, password, role)
                VALUES ('$name', '$email', '$phone', '$password', 'customer')";

        if($conn->query($sql)){
            $msg = "Account created successfully! You can now login.";
        } else {
            $msg = "Error occurred while registering.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>

<style>
body{
    font-family:Arial;
    background:#f4f6f9;
}

.box{
    width:350px;
    margin:80px auto;
    padding:20px;
    background:white;
    border-radius:10px;
    box-shadow:0px 0px 10px rgba(0,0,0,0.2);
}

input{
    width:100%;
    padding:10px;
    margin:8px 0;
}

button{
    width:100%;
    padding:10px;
    background:#2a5298;
    color:white;
    border:none;
    cursor:pointer;
}

.msg{
    text-align:center;
    color:green;
}

</style>
</head>

<body>

<div class="box">

<h2>Register</h2>

<p class="msg"><?php echo $msg; ?></p>

<form method="POST">

<input type="text" name="name" placeholder="Full Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="text" name="phone" placeholder="Phone" required>
<input type="password" name="password" placeholder="Password" required>

<button name="register">Create Account</button>

</form>

</div>

</body>
</html>