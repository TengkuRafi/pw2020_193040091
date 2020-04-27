<?php 
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}
require 'functions.php';

$id = $_GET['id'];

$rv = query("SELECT * FROM elektronika WHERE id =$id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Elektronika</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $rv["gambar"]; ?>" alt=""> 
        </div>
            <div class="keterangan">
                <p><?= $rv["id"]; ?></p>  
                <p><?= $rv["nama"]; ?></p>
                <p><?= $rv["pabrikan"]; ?></p>
                <p><?= $rv["bran"]; ?></p>
                <p><?= $rv["harga"]; ?></p>
            </div>
            <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>