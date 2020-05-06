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
            
            </div>
                <div class="right-box">
                
                <span class="sigin">Selamat Datang  Di<br> Form Registrasi</span>
                
                </div>

                
                
</form>
</div>
</body>
</html>