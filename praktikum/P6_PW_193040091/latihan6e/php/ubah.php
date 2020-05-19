<?php
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="hidden" name = "id" value="<?= $rv['id']; ?>">
        <table>
            <tr>
                <td>
                    <label for="nama">Nama</label>
                </td>
                <td>
                    <input type="text" name="nama" value="<?= $rv['nama']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gambar">Gambar</label>
                </td>
                <td>
                    <input type="text" name="gambar" value="<?= $rv['gambar']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="pabrikan">Pabrikan</label>
                </td>
                <td>
                    <input type="text" name="pabrikan" value="<?= $rv['pabrikan']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="bran">Merk</label>
                </td>
                <td>
                    <input type="text" name="merk"value="<?= $rv['bran']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="harga">Harga</label>
                </td>
                <td>
                    <input type="text" name="harga"value="<?= $rv['harga']; ?>">
                </td>
            </tr>
        </table>
        <button type="submit" name="ubah">Ubah Data</button>
    </form>
    
</body>
</html>