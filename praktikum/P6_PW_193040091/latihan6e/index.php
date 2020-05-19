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
<?php foreach ($elektronika as $rv) : ?>
    <p class="nama">
        <a href="php/detail.php?id=<?= $rv['id']?>">
            <?= $rv["nama"] ?>
        </a>
    </p>   
<?php endforeach; ?>
</div>

</body>
</html>
