<?php

    $conn = mysqli_connect("localhost", "root", "")or die("koneksi ke DB gagal");


    mysqli_select_db($conn, "tubes_193040091") or die ("Database salah!");


    $result = mysqli_query($conn,"SELECT * FROM elektronika");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charshet="UTF-8">
    
    <title>Elektronika</title>
</head>
<body>
<div class="container">
<div class = "table">
<table cellpadding="10"; cellsapcing="0" border="1">
<tr >
    <th bgcolor="red">No</th>
    <th bgcolor="yellow">Nama</th>
    <th bgcolor="lightgreen">Gambar</th>
    <th bgcolor="aqua">Pabrikan</th>
    <th bgcolor="#eaeaea">Pruduk</th>
    <th bgcolor="orange">Harga</th>
</tr>
</div>
<?php $i =1 ?>
<?php while($rv  = mysqli_fetch_assoc($result)) :?>

    <tr>
    <td><?= $rv["id"] ?></td>  
    <td><?= $rv["nama"] ?></td>
    <td><img src="assets/img/<?= $rv["gambar"]; ?>"></td>
    <td><?= $rv["pabrikan"] ?></td>
    <td><?= $rv["bran"] ?></td>
    <td><?= $rv["harga"] ?></td>
    </tr>
    <?php $rv++ ?>
<?php endwhile; ?>
</table>
</div>

</body>
</html>