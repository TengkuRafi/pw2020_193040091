<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}
require 'functions.php';
$id = $_GET['id'];
$rv = query("SELECT * FROM elektronika WHERE id = $id")[0];
if(isset($_POST['ubah'])){
    if(ubah($_POST) > 0){
        echo "<script>
            alert('Data berhasil diubah');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal diubah');
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Halaman Ubah data</title>
    <link rel="stylesheet" href="../css/ubah.css">
</head>
<body>
<section id="contact" class="contact mb-5">

<div class="col text-center">
        <h1>Mohon Perhatian !!!!!</h1>
      </div>
<div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card text-white bg-dark mb-3 text-center">
          <div class="card-body">
            <h5 class="card-title">Perhatian !!!!</h5>
            <p class="card-text">Jangan sampai ada kesalahan dalam mengubah data nanti susah lagi, nanti eror lagi.Tolong kasihani yg buat udh 1 minggu bergadang yah!!!!</p>
          </div>
        </div>
      </div>
    </div>
    <form action="" method="post">
    <input type="hidden" name = "id" value="<?= $rv['id']; ?>">
        <table>
        <label for="nama">Nama</label>
            <input  type="text" name="nama" class="form-control" value="<?= $rv['nama']; ?>">
            <tr>
            <label for="gambar">Gambar</label>
            <input type="text" class="form-control" name="gambar" value="<?= $rv['gambar']; ?>">
            </tr>
            <tr>
            <label for="pabrikan">Pabrikan</label>
            <input type="text" class="form-control" name="pabrikan" value="<?= $rv['pabrikan']; ?>">
            </tr>
            <tr>
            <label for="bran">Merk</label>
            <input type="text" class="form-control" name="merk" value="<?= $rv['bran']; ?>">
            </tr>
            <tr>
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga"value="<?= $rv['harga']; ?>">
            </tr>
        </table>
        <button type="submit" name="ubah"class="btn btn-outline-dark">Ubahlah</button>
    </form>
</section>
</body>
</html>