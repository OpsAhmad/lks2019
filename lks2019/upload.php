<!DOCTYPE html>
<html lang="id">
<head>
    <?php include 'template/head.php';?>
    <title>Upload Produk</title>
</head>
<body style="background:#dadada;">
<?php include 'template/navbar.php';

// MENGECEK APA SUDAH LOGIN ATAU BELUM
if(!isset($_SESSION['login'])){
    header('location:masuk.php');
}

if(isset($_POST['submit'])){
    // memindahkan file yang terupload
    $foto = $_FILES['foto']['name'];
    $namasementara = $_FILES['foto']['tmp_name'];
    $dir = 'uploads/';
    move_uploaded_file($namasementara,$dir.$foto);

    // mengambil data post
    $judul = $_POST['judul'];
    $nohp = $_POST['nohp'];
    $deskripsi = $_POST['deskripsi'];
    $jumlahpasokan = $_POST['jumlahpasokan'];
    $satuanpasokan = $_POST['satuanpasokan'];
    $penjual = $_POST['penjual'];
    $tanggal = $_POST['tanggal'];
    $kelompok = $_POST['kelompok'];
    $sql = mysqli_query($db,"INSERT INTO `produk`( `judul`, `deskripsi`, `tanggal`, `kelompok`, `jumlahpasokan`, `satuanpasokan`, `penjual`, `nohp`, `foto`) 
    VALUES ('$judul','$deskripsi','$tanggal',$kelompok,$jumlahpasokan,$satuanpasokan,'$penjual',$nohp,'$foto')");

    if($sql == true){
        header('location:index.php?uploadsucces#pop');
    }
}
// MENGUNGGAH PRODUK
?>
    <div class="wrapper" id="wrap">
        <div class="tememplek">
            <div class="kiwo">
                <img src="assets/icon/sell.svg" alt="icon jual">
            </div>
            <div class="tengen">
                <form action="" method="post" enctype="multipart/form-data">
                <h1 class="judul">UnggahProduk</h1>
                <br>
                <br>
                <input type="hidden" name="tanggal" value="<?php echo date('d M Y');?>">
                <input type="hidden" name="penjual" value="<?php echo $_COOKIE['username'];?>">
                <input type="hidden" name="kelompok" value="<?php echo $_COOKIE['kelompok'];?>">
                <label for=""><b class="p">*</b>Foto Produk</label>
                <br>
                <input type="file" name="foto" id="" required>
                <br><br>
                <label for=""><b class="p">*</b>Judul</label>
                <br>
                <input type="text" name="judul" placeholder="Ikan Nila" required>
                <br><br>
                <label for=""><b class="p">*</b>No Hp</label>
                <br>
                <input type="number" name="nohp" placeholder="08xxxx" required>
                <br><br>
                <label for=""><b class="p">*</b>Deskripsi</label>
                <br>
                <textarea name="deskripsi" id="" cols="" rows="" placeholder="Deskripsi produk tani saya.." v></textarea>
                <br><br>
                <label for=""><b class="p">*</b>Jumlah Pasokan</label>
                <br>
                <input type="number" name="jumlahpasokan" id="" placeholder="1000" required>
                <br>
                <br>
                <label for=""><b class="p">*</b>Satuan barang</label>
                <br>
                <select name="satuanpasokan" id="">
                    <option value="1">Gram</option>
                    <option value="2">Kilogram</option>
                    <option value="3">Ton</option>
                    <option value="4">Buah</option>
                </select>
                <br><br>
                <input type="submit" value="Unggah Produk" name="submit">
            
            </form>            
            </div>
        </div>
    </div>
<?php include 'template/footer.php';?>
</body>
</html>