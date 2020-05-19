<?php
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="nama">Nama</label>
                </td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gambar">Gambar</label>
                </td>
                <td>
                    <input type="text" name="gambar">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="pabrikan">Pabrikan</label>
                </td>
                <td>
                    <input type="text" name="pabrikan">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="bran">Merk</label>
                </td>
                <td>
                    <input type="text" name="merk">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="harga">Harga</label>
                </td>
                <td>
                    <input type="text" name="harga">
                </td>
            </tr>
        </table>
        <button type="submit" name="tambah">Tambah Data</button>
    </form>
    
</body>
</html>