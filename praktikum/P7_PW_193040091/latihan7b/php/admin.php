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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>




    <div class="container">
    <a href="logout.php">
        <button type="">Logout</button>
    </a>
        <table class="table table-dark table-hover table-bordered" >
        <thead>
        <a href="tambah.php">
        <button>Tambah Data</button></a>       
        <form action="" method ="get">
            <input type="text" name="keyword">
                <button type="submit" name="cari">Cari</button>
        </form>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Gambar</th>
            <th scope="col">Pabrikan</th>
            <th scope="col">Merk</th>
            <th scope="col">Harga</th>
            <th scope="col" style="width:200px;">Action</th>
        </tr>
        </thead>
<?php if(empty($elektronika)) : ?>
        <tr>
            <td colspan ="7">
                <h1>Data tidak ditemukan</h1>
            </td>
        </tr>
<?php else : ?>
<?php $i= 1; ?>
<?php foreach ($elektronika as $rv) : ?>
            <tbody>
        <tr>
            <td><?= $rv['id'] ?></td> 
            <td><?= $rv['nama'] ?></td>
            <td><img src="../assets/img/<?= $rv['gambar']; ?>"></td>
            <td><?= $rv['pabrikan'] ?></td>
            <td><?= $rv['bran'] ?></td>
            <td><?= $rv['harga'] ?></td>
            <td class="float-center">
        <a href="ubah.php?id=<?= $rv['id'];?>"><button class="btn btn-success badge-pill">Ubah</button></a>
        <a href="hapus.php?id=<?= $rv['id'];?>" onclick="return confirm('Yakin mau dihapus?')"><button class="btn badge-danger badge-pill">Hapus</button></a>
        </td>
        </tr>
        </tbody>
            <?php $i++ ?>
        <?php endforeach; ?>
    <?php endif; ?>
    </table>
    
</body>
</html>

