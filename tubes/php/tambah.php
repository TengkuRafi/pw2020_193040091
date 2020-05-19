<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}
require 'functions.php';

if(isset($_POST['tambah'])){
    if(tambah($_POST) > 0){
        echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal ditambahkan');
            document.location.href = 'admin.php';
        </script>";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/tambah.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="col text-center">
        <h1>Mohon Perhatian !!!!!</h1>
      </div>
<div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card text-white bg-dark mb-3 text-center">
          <div class="card-body">
            <h5 class="card-title">Perhatian !!!!</h5>
            <p class="card-text">Jangan sampai ada kesalahan dalam menambahkan data nanti susah lagi, nanti eror lagi.Tolong kasihani yg buat udh 1 minggu bergadang yah!!!!</p>
          </div>
        </div>
      </div>
    </div>
    <form action="" method="post">
        <div class="text">
        <table>
        <label for="nama">Nama</label>
            <input  type="text" name="nama" class="form-control">
            <tr>
            <label for="gambar">Gambar</label>
            <input type="text" class="form-control" name="gambar" >
            </tr>
            <tr>
            <label for="pabrikan">Pabrikan</label>
            <input type="text" class="form-control" name="pabrikan" >
            </tr>
            <tr>
            <label for="bran">Merk</label>
            <input type="text" class="form-control" name="merk">
            </tr>
            <tr>
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga">
            </tr>
            </tr>
        </table>
        </div>
        <button type="submit" name="tambah" class="btn btn-danger">Tambah Data</button>
    </form>
    
</body>
</html>