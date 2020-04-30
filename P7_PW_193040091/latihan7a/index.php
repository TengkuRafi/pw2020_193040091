<?php

   require 'php/functions.php';

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
<form action="" method ="get">
        <input type="text" name="keyword">
        <button type="submit" name="cari">Cari</button>
    </form>
    <?php if(empty($elektronika)) : ?> 
                <h1>Data tidak ditemukan</h1>             
<?php else : ?>
<?php foreach ($elektronika as $rv) : ?>
    <p class="nama">
        <a href="php/detail.php?id=<?= $rv['id']?>">
            <?= $rv["nama"] ?>
        </a>
    </p>   
<?php endforeach; ?>
<?php endif;  ?>
</div>

<a href="php/login.php">
        <button>
            Masuk kehalaman admin
        </button>
        </a>

</body>
</html>
