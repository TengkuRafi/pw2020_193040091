<?php
    function koneksi() {
        $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
        mysqli_select_db($conn, "tubes_193040091") or die ("Database salah");

        return $conn;
    }

    function query($sql){
        $conn = koneksi();
        $result = mysqli_query($conn , "$sql");

        var_dump($result);

        $rows = [];
        while ($rv = mysqli_fetch_assoc($result)){
            $rows[] = $rv;
        }
        return $rows;
    }

    function tambah($data)
    {
        $conn = koneksi();

        $nama = htmlspecialchars($data['nama']);
        $gambar = htmlspecialchars($data['gambar']);
        $pabrikan = htmlspecialchars($data['pabrikan']);
        $bran = htmlspecialchars($data['merk']);
        $harga = htmlspecialchars($data['harga']);

        $query = "INSERT INTO elektronika VALUES
                    ('','$nama','$gambar','$pabrikan','$bran','$harga')";

            mysqli_query($conn, $query);

            return mysqli_affected_rows($conn);
        
    }
    function hapus($id){
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM elektronika WHERE id = $id");
        return mysqli_affected_rows($conn);
        
    }
    function ubah($data)
    {
        $conn = koneksi();
        $id = htmlspecialchars($data['id']);
        $nama = htmlspecialchars($data['nama']);
        $gambar = htmlspecialchars($data['gambar']);
        $pabrikan = htmlspecialchars($data['pabrikan']);
        $bran = htmlspecialchars($data['merk']);
        $harga = htmlspecialchars($data['harga']);

        $query = "UPDATE elektronika
                SET 
                nama = '$nama',
                gambar = '$gambar',
                pabrikan = '$pabrikan',
                bran ='$bran',
                harga = '$harga'
                WHERE id = '$id'
                ";

            mysqli_query($conn, $query);

            return mysqli_affected_rows($conn);
        
    }





?>