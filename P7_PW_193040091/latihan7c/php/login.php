<?php
session_start();
require 'functions.php';

if(isset($_SESSION['username'])){
    header("Location : admin.php");
}

if(isset($_COOKIE['username']) && isset ($_COOKIE['hash'])){
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    if ($hash === hash ('sha256', $row['id'], false)){
        $_SESSION['username'] = $_POST['username'];
        header("Location: admin.php");
        exit;
    }
}


if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

    if(mysqli_num_rows($cek_user) > 0){
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);

            if (isset($_POST['remember'])){
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash ('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }
        }
        if (hash('sha256', $row['id']) == $_SESSION['hash']){
            header("Location: admin.php");
            die;
        }
        header("Location: ../index.php");
        die;
    }
    $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body>
    <?php if(isset($error)) :?>
    <p style="color:red; fontstyle:italic;">Username atau Password</p>
    <?php endif ?>
    <form class="box" action="" method="post">
                <h1>Login</h1>
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="submit" value="Login">
                <input type="checkbox" name="remember">
                <label for="rember">Remember Me</label>
                <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini!</a></p>
    </form>
</body>
</html>