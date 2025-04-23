<?php
/*
include 'database.php';
session_start();

    if (isset($_SESSION['username'])) {
        header("Location: berhasil_login.php");
        exit();
    }

*/
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Selacai</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="">
                <h1>Desa Selacai</h1>
                <hr>
                <p>LOGIN</p>
                <label for="">Username</label>
                <input type="text" placeholder="username">
                <label for="">Password</label>
                <input type="password" placeholder="Password">
                <button><a href="/Selacai/admin1"</a>Login</button>
                <p>
                    <a href="#">Forgot Password?</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="sawahnusa.jpg" alt="">
        </div>
    </div>
</body>

</html>