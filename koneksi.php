<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_umkm");

    if(!$koneksi)
    {
        echo "Koneksi ke MySQL Gagal... ";
    }
?>
