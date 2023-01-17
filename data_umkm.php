<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Data UMKM</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-10">
    <div class="card-header bg-primary text-white">
        Daftar Data UMKM
    </div>   
    <br>
    <form method="GET" action="">
        Cari UMKM <input type="text" name="s">
        <input type="submit" value="cari">
    </form>
        <div class="card-body">
            <a href="index.php" class="btn btn-primary">Tambah Data</a>
            <br>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>KATEGORI USAHA</th>
                    <th>JENIS USAHA</th>
                    <th>OMSET PENJUALAN</th>
                    <th>ALAMAT TOKO</th>
                    <th>IZIN USAHA</th>
                    <th>NO IZIN</th>
                    <th>KONTAK</th>
                    <th>AKSI</th>
                </tr>
            <?php
                include "koneksi.php";
                $no = 1;
                $NAMA = "";
                if (isset($_GET['s']))
                {
                    $NAMA = $_GET['s'];
                    $tampil = mysqli_query($koneksi, "SELECT * FROM tblumkm WHERE NAMA LIKE '%$NAMA'");
                }else
                $tampil = mysqli_query($koneksi, "SELECT * FROM tblumkm");
                while ($data = mysqli_fetch_array($tampil))
                {

            ?>
            <tr>
                    <td><?php echo $no++;?> </td>
                    <td><?php echo $data ['nama']?></td>
                    <td><?php echo $data ['kategori_usaha']?></td>
                    <td><?php echo $data ['jenis_usaha']?></td>
                    <td><?php echo $data ['omset_penjualan']?></td>
                    <td><?php echo $data ['alamat_toko']?></td>
                    <td><?php echo $data ['izin_usaha']?></td>
                    <td><?php echo $data ['no_izin']?></td>
                    <td><?php echo $data ['kontak']?></td>
            <td>
                    <a href="edit_data.php?nama=<?php echo $data['nama'];?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="hapus_data.php?nama=<?php echo $data['nama'];?>" class="btn btn-sm btn-danger">Hapus</a>
            </td>
            </tr>

            <?php } ?>
            </table>
        </div>
    </body>
</html>