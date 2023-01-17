<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>FORM PENDATAAN UMKM</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <script src="js/jquery-3.4.1.min.js"></script> -->
    <script src="C:\xampp\htdocs\pendataan-umkm\js\bootstrap.js"></script>

</head>
<body>
    <div class="container col-md-6">
    <div class="card-header bg-primary text-white">
        FORM PENDATAAN UMKM
    </div>   

<div class="card-body">
    <form action="" method="POST" class="form-item">
    <form>
    <div class="form-group">
    <label for="NAMA"> NAMA USAHA/NAMA PEMILIK</label>
    <input type="text" name="NAMA" class="form-control col-md-9" placeholder="Masukkan Nama Pemilik atau Nama UMKM">
    </div>

    <div class="form-group">
    <label for="KATEGORI_USAHA"> KATEGORI USAHA </label>
    <br>
    <label><input type="radio" name="JENIS_USAHA" value="Mikro"> Mikro (Omset 300-500jt/thn)</label>
    <br>
    <label><input type="radio" name="JENIS_USAHA" value="Kecil"> Kecil (Omset 500jt-2,5m/thn)</label>
    <br>
    <label><input type="radio" name="JENIS_USAHA" value="Menengah"> Menengah (Omset >2,5m/thn)</label>
    </div>

    <div class="form-group">
    <label for="JENIS_USAHA"> JENIS USAHA </label>
    <br>
    <select name="JENIS_USAHA">
	<option value="1">Kuliner</option>
	<option value="2">Properti/Mebel</option>
	<option value="3">Fashion/Kecantikan</option>
	<option value="4">Otomotif</option>
	<option value="5">Lainnya</option>
    </select>
    </div>

    <div class="form-group">
    <label for="OMSET_PENJUALAN"> OMSET </label>
    <input type="text" name="OMSET_PENJUALAN" class="form-control col-md-9" placeholder="Masukkan Omset Penjualan">
    </div>

    <div class="form-group">
    <label for="ALAMAT_TOKO"> ALAMAT TOKO </label>
    <input type="text" name="ALAMAT_TOKO" class="form-control col-md-9" placeholder="Masukkan Alamat Toko">
    </div>

    <div class="form-group">
    <label for="IZIN_USAHA"> KEPEMILIKAN IZIN USAHA </label>
    <br>
    <label><input type="radio" name="IZIN_USAHA" value="ADA"> ADA</label>
    <br>
    <label><input type="radio" name="IZIN_USAHA" value="TIDAK"> TIDAK</label>
    </div>

    <div class="form-group">
    <label for="NO_IZIN"> NOMOR NIB/SKU (JIKA ADA)</label>
    <input type="text" name="NO_IZIN" class="form-control col-md-9" placeholder="Masukkan Nomor NIB/SKU">
    </div>

    <div class="form-group">
    <label for="KONTAK"> KONTAK (TELP) PEMILIK </label>
    <input type="text" name="KONTAK" class="form-control col-md-9" placeholder="Masukkan Kontak Pemilik Usaha">
    <br>

    <div class="container col-md-6">
    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
    <button type="reset" class="btn btn-danger">BATAL</button>
    </div>  
    </form>
</body>
</html>

<?php
    include "koneksi.php";
    if(isset($_POST['simpan']))
    {
        $NAMA              = $_POST['NAMA'];
        $KATEGORI_USAHA    = $_POST['KATEGORI_USAHA'];
        $JENIS_USAHA       = $_POST['JENIS_USAHA'];
        $OMSET_PENJUALAN   = $_POST['OMSET_PENJUALAN'];
        $ALAMAT_TOKO       = $_POST['ALAMAT_TOKO'];
        $IZIN_USAHA        = $_POST['IZIN_USAHA'];
        $NO_IZIN           = $_POST['NO_IZIN'];
        $KONTAK            = $_POST['KONTAK'];
        
        mysqli_query($koneksi, "INSERT INTO tblumkm VALUES(
        '$NAMA','$KATEGORI_USAHA','$JENIS_USAHA','$OMSET_PENJUALAN','$ALAMAT_TOKO','$IZIN_USAHA','$NO_IZIN','$KONTAK'
        )") or die(mysqli_error($koneksi));

        echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Disimpan....</h5></div>";
        echo "<meta http-equiv='refresh' content='1;url=http://localhost/web/data_umkm.php'>";
    }

?>