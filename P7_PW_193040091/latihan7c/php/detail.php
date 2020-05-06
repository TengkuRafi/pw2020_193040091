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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Elektronika</title>
    <link rel="stylesheet" type="text/css" href="../css/detail.css">
</head>
<body>
    <div class="main">
        <div class="gambar">
            <img src="../assets/img/<?= $rv["gambar"]; ?>" alt=""> 
        </div>
            <div class="text">
                 
                <p><?= $rv["nama"]; ?></p>
                <p><?= $rv["pabrikan"]; ?></p>
                <p><?= $rv["bran"]; ?></p>
                <p><?= $rv["harga"]; ?></p>
            </div>
            <p>Selamat datang di Wibesite Sederhana ini,Wibesite ini berisi tentang barang barang Elektoronik kami turut sertakan Nama,Gambar,Pabrikan,Merek,Harga jika anda meminatkan nya</p>
            <button class="btn btn-outline-dark"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>