<?php

   require 'functions.php';

   $elektronika = query("SELECT * FROM elektronika")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charshet="UTF-8">
    <title>Elektronika</title>
</head>
<body>
<div class="container">
    <table border ="1" cellpadding="13" cellspacing="0">
    <a href="tambah.php">
    <button>Tambah Data</button></a>
    <tr>
        <th>ID</th>
        <th>Opsi</th>
        <th>Nama</th>
        <th>Gambar</th>
        <th>Pabrikan</th>
        <th>Merk</th>
        <th>Harga</th>
    </tr>
    <?php foreach ($elektronika as $rv) : ?>
    <?php $i= 1; ?>
        <tr>
        <td><?= $rv['id'] ?></td> 
        <td>
        <a href=""><button>Ubah</button></a>
        <a href=""><button>Hapus</button></a>
        </td>
            <td><?= $rv['nama'] ?></td>
            <td><img src="../assets/img/<?= $rv['gambar']; ?>"></td>
            <td><?= $rv['pabrikan'] ?></td>
            <td><?= $rv['bran'] ?></td>
            <td><?= $rv['harga'] ?></td>
        </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>
    
</body>
</html>

