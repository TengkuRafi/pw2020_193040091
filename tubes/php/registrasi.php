<?php
require'functions.php';
if(isset($_POST['register'])){
    if(registrasi($_POST) > 0){
        echo "<script>
            alert('Registrasi Berhasil!');
            document.location.href = 'login.php';
        </script>";
    } else {
        echo "<script>
            alert('Registrasi Gagal!');
            document.location.href = 'login.php';
        </script>";
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet"  type="text/css" href="../css/registrasi.css">
</head>
<body>
<form action="" method="post">
<div id="login-box">
                <div class="left-box">
                        <H1>Silakan isi Formulir Registrasi :)</H1>
                        <input type="text" name="username" placeholder="Username/ID">                        
                        <input type="password" name="password" placeholder="Password">
                        <input type="submit" name="register" value="Daftar">
                        <br>
                        <a href="../login.php">Kembali</a>
                        
                </div>
                <div class="right-box">
                <span class="sigin">Selamat Datang  Di<br> Form Registrasi</span>
                </div>


                
                
</form>
</div>
</body>
</html>