<?php
session_start();
include "config.php";

$error = "";

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // get user
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {

        $user = $result->fetch_assoc();

        // verify password (SECURE WAY)
        if (password_verify($password, $user['password'])) {

            // create session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user'] = $user['name'];
            $_SESSION['role'] = $user['role'];

            // redirect dashboard
            header("Location: dashboard.php");
            exit();

        } else {
            $error = "❌ Wrong password";
        }

    } else {
        $error = "❌ User not found";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login - JESSENIZER FOOD SUPPLY</title>

<style>
body{
    font-family:Arial;
    background:linear-gradient(to right,#1e3c72,#2a5298);
    margin:0;
}

.box{
    width:350px;
    background:pink;
    margin:120px auto;
    padding:25px;
    border-radius:12px;
    box-shadow:0px 0px 20px rgba(0,0,0,0.3);
}

h2{
    text-align:center;
    color:#2a5298;
}

input{
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
    color:yellow;
    border:none;
    border-radius:6px;
    cursor:pointer;
    font-size:16px;
}

button:hover{
    background:#1e3c72;
}

.error{
    text-align:center;
    color:green;
    margin-bottom:10px;
}
</style>

</head>

<body>

<div class="box">

    <h2>Login</h2>

    <div class="error">
        <?php echo $error; ?>
    </div>

    <form method="POST">

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="login">LOGIN</button>

    </form>

</div>

</body>
</html>