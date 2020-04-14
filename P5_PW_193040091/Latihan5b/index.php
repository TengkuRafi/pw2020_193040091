<?php

   require 'php/functions.php';
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
<table>
<tr >
    <th>No</th>
    <th>Nama</th>
    <th>Gambar</th>
    <th>Pabrikan</th>
    <th>Pruduk</th>
    <th>Harga</th>
</tr>
<?php $i =1 ?>
<?php foreach ($elektronika as $rv) : ?>
   
    <tr>
    <td><?= $rv["id"] ?></td>  
    <td><?= $rv["nama"] ?></td>
    <td><img src="assets/img/<?= $rv["gambar"]; ?>"></td>
    <td><?= $rv["pabrikan"] ?></td>
    <td><?= $rv["bran"] ?></td>
    <td><?= $rv["harga"] ?></td>
    </tr>
    <?php $i++ ?>
<?php endforeach; ?>
</table>
</div>

</body>
</html>
