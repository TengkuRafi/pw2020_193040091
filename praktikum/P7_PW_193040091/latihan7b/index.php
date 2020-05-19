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











<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Elektronika</title>
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    
    <nav class="navbar navbar-light bg- rgba">
  <a class="navbar-brand" color="white">Elektronika</a>
  
  <form class="form-inline">
  <a href="php/login.php">
  <button type="button" class="btn btn-outline-warning">Klik Untuk Admin!</button>
  </a>
    <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Tulis disini" aria-label="Search">
    <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" name="cari">Cari</button>
  </form>
</nav>    

<div class="container">
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

  </body>
</html>











