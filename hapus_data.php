<?php
    include "koneksi.php";
    $id = $_GET['nama'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM tblumkm WHERE nama='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/web/data_umkm.php'>";
?>