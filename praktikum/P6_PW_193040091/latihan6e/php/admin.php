<?php

   require 'functions.php';

    if(isset($_GET['cari'])){
        $keyword = $_GET['keyword'];
        $elektronika = query("SELECT * FROM elektronika WHERE
                            nama LIKE '%$keyword%' OR
                            gambar LIKE '%$keyword%' OR
                            pabrikan LIKE '%$keyword%' OR
                            bran LIKE '%$keyword%' OR
                            harga LIKE '%$keyword%'
                            ");
 
    } else {
        $elektronika = query("SELECT * FROM elektronika");
       
    }
    
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
    <form action="" method ="get">
        <input type="text" name="keyword">
        <button type="submit" name="cari">Cari</button>
    </form>
    <tr>
        <th>ID</th>
        <th>Opsi</th>
        <th>Nama</th>
        <th>Gambar</th>
        <th>Pabrikan</th>
        <th>Merk</th>
        <th>Harga</th>
    </tr>
    <?php if(empty($elektronika)) : ?>
            <tr>
                <td colspan ="7">
                    <h1>Data tidak ditemukan</h1>
                </td>
            </tr>
    <?php else : ?>
    <?php $i= 1; ?>
    <?php foreach ($elektronika as $rv) : ?>
        <tr>
        <td><?= $rv['id'] ?></td> 
        <td>
        <a href="ubah.php?id=<?= $rv['id'];?>"><button>Ubah</button></a>
        <a href="hapus.php?id=<?= $rv['id'];?>" onclick="return confirm('Yakin mau dihapus?')"><button>Hapus</button></a>
        </td>
            <td><?= $rv['nama'] ?></td>
            <td><img src="../assets/img/<?= $rv['gambar']; ?>"></td>
            <td><?= $rv['pabrikan'] ?></td>
            <td><?= $rv['bran'] ?></td>
            <td><?= $rv['harga'] ?></td>
        </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    <?php endif; ?>
    </table>
    
</body>
</html>

