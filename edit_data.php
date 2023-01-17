<?php
    include "koneksi.php";
    $id = $_GET['nama'];
    $ambilData = mysqli_query($koneksi, "SELECT * FROM tblumkm WHERE nama='$id'");
    $data=mysqli_fetch_array($ambilData);
?>

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
    <div class="container col-md-6">
    <div class="card-header bg-primary text-white">
        Input Data UMKM
    </div>   

<div class="card-body">
    <form action="" method="POST" class="form-item">
    <form>
    <div class="form-group">
    <label for="NAMA"> NAMA USAHA/NAMA PEMILIK </label>
    <input type="text" name="nama"value="<?php echo $data['nama']?>" class="form-control col-md-9" placeholder="Masukkan NAMA Pemilik atau NAMA UMKM">
    </div>

    <div class="form-group">
    <label for="KATEGORI_USAHA"> KATEGORI USAHA </label>
    <br>
    <label><input type="radio" name="kategori_usaha" value="Mikro"<?php if ($data['kategori_usaha'] == 'Mikro')echo 'checked'?>> Mikro (Omset 300-500jt/thn)</label>
    <label><input type="radio" name="kategori_usaha" value="Kecil"<?php if ($data['kategori_usaha'] == 'Kecil')echo 'checked'?>> Kecil (Omset 500jt-2,5m/thn)</label>
    <label><input type="radio" name="kategori_usaha" value="Menengah"<?php if ($data['kategori_usaha'] == 'Menengah')echo 'checked'?>> Menengah (Omset >2,5m/thn)</label>    
    </div>

    <div class="form-group">
    <label for="JENIS_USAHA"> JENIS USAHA </label>
    <br>
    <label><input type="radio" name="jenis_usaha" value="Kuliner"<?php if ($data['jenis_usaha'] == 'Kuliner')echo 'checked'?>> Kuliner</label>
    <label><input type="radio" name="jenis_usaha" value="Properti/Mebel"<?php if ($data['jenis_usaha'] == 'Properti/Mebel')echo 'checked'?>> Properti/Mebel</label>
    <label><input type="radio" name="jenis_usaha" value="Fashion/Kecantikan"<?php if ($data['jenis_usaha'] == 'Fashion/Kecantikan')echo 'checked'?>> Fashion/Kecantikan</label>    
    <label><input type="radio" name="jenis_usaha" value="Otomotif"<?php if ($data['jenis_usaha'] == 'Otomotif')echo 'checked'?>> Otomotif</label>
    <label><input type="radio" name="jenis_usaha" value="Lainnya"<?php if ($data['jenis_usaha'] == 'Lainnya')echo 'checked'?>> Lainnya</label>
    </div>

    <div class="form-group">
    <label for="OMSET_PENJUALAN"> OMSET </label>
    <input type="text" name="omset_penjualan" value="<?php echo $data['omset_penjualan']?>"class="form-control col-md-9" placeholder="Masukkan Omset Penjualan">
    </div>

    <div class="form-group">
    <label for="alamat_toko"> ALAMAT TOKO </label>
    <input type="text" name="alamat_toko" value="<?php echo $data['alamat_toko']?>" class="form-control col-md-9" placeholder="Masukkan Alamat Toko">
    </div>

    <div class="form-group">
    <label for="IZIN_USAHA"> KEPEMILIKAN IZIN USAHA </label>
    <br>
    <label><input type="radio" name="izin_usaha" value="L"<?php if ($data['izin_usaha'] == 'Ada')echo 'checked'?>> Ada</label>
    <label><input type="radio" name="izin_usaha" value="P"<?php if ($data['izin_usaha'] == 'Tidak')echo 'checked'?>> Tidak</label>
    </div>

    <div class="form-group">
    <label for="NO_IZIN"> NOMOR NIB/SKU (JIKA ADA) </label>
    <input type="text" name="no_izin" value="<?php echo $data['no_izin']?>" class="form-control col-md-9" placeholder="Masukkan Nomor NIB/SKU">
    </div>

    <div class="form-group">
    <label for="kontak"> KONTAK (TELP) PEMILIK </label>
    <input type="text" name="kontak" value="<?php echo $data['kontak']?>" class="form-control col-md-9" placeholder="Masukkan Kontak (Telp) Pemilik">
    <br>
    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
    <button type="reset" class="btn btn-danger">BATAL</button>
    </form>
</body>
</html>

<?php
    include "koneksi.php";
    if(isset($_POST['simpan']))
    {
        $NAMA              = $_POST['nama'];
        $KATEGORI_USAHA    = $_POST['kategori_usaha'];
        $JENIS_USAHA       = $_POST['jenis_usaha'];
        $OMSET_PENJUALAN   = $_POST['omset_penjualan'];
        $ALAMAT_TOKO       = $_POST['alamat_toko'];
        $IZIN_USAHA        = $_POST['izin_usaha'];
        $NO_IZIN           = $_POST['no_izin'];
        $KONTAK            = $_POST['kontak'];
        
        mysqli_query($koneksi, "UPDATE tblumkm 
            SET nama='$NAMA,', kategori_usaha='$KATEGORI_USAHA', jenis_usaha='$JENIS_USAHA',omset_penjualan='$OMSET_PENJUALAN', alamat_toko='$ALAMAT_TOKO', izin_usaha='$IZIN_USAHA', no_izin='$NO_IZIN', kontak='$KONTAK'
            WHERE nama='$id'") or die(mysqli_error($koneksi));
            
        echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang DiUpdate....</h5></div>";
        echo "<meta http-equiv='refresh' content='1;url=http://localhost/web/data_umkm.php'>";
    }

?>
