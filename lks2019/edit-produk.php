<!DOCTYPE html>
<html lang="id">
<head>
    <?php include 'template/head.php';?>
    <title>Menampilkan produk</title>
</head>
<body style="background:#dadada;">
<?php include 'template/navbar.php';
// dicek apa ada id atau tidak
if(!isset($_GET['id'])){
    header('location:produk.php');
}

$id = $_GET['id'];

$sql = mysqli_query($db,"SELECT * FROM `produk` WHERE `id` = $id");
$row = mysqli_fetch_assoc($sql);

// mengambill data produk yang akan diedit

// mengunggah pembaruan produk
if(isset($_POST['submit'])){
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $jumlahpasokan = $_POST['jumlahpasokan'];
    $satuanpasokan = $_POST['satuanpasokan'];

    $sql2 = mysqli_query($db,"UPDATE `produk` SET `judul`='$judul',`deskripsi`='$deskripsi',`jumlahpasokan`=$jumlahpasokan,`satuanpasokan`=$satuanpasokan WHERE `id` = $id");

    if($sql2 == true){
        header('location:index.php?updatesucces#pop');
    }
}

?>
    <div class="wrapper" id="wrap">
        <div class="tememplek">
            <div class="kiwo">
                <img src="assets/icon/edit.svg" alt="icon edit">
            </div>
            <div class="tengen">
                <form action="" method="post">
                <h1 class="judul">Edit Produk</h1>
                <br>
                <br>
                <label for=""><b class="p">*</b>Judul</label>
                <br>
                <input type="text" name="judul" placeholder="Ikan Nila" value="<?php echo $row['judul'];?>">
                <br><br>
                <label for=""><b class="p">*</b>Deskripsi</label>
                <br>
                <textarea name="deskripsi" id="" cols="" rows="" placeholder="Deskripsi produk tani saya.."><?php echo $row['deskripsi'];?></textarea>
                <br><br>
                <label for=""><b class="p">*</b>Jumlah Pasokan</label>
                <br>
                <input type="number" name="jumlahpasokan" id="" placeholder="9999" value="<?php echo $row['jumlahpasokan'];?>">
                <br>
                <br>
                <label for=""><b class="p">*</b>Satuan barang</label>
                <br>
                <select name="satuanpasokan" id="">
                    <option value="1" <?php     if($row['satuanpasokan'] == 1){echo 'selected';}   ?>>Gram</option>
                    <option value="2"  <?php     if($row['satuanpasokan'] == 2){echo 'selected';}   ?>>Kilogram</option>
                    <option value="3"  <?php     if($row['satuanpasokan'] == 3){echo 'selected';}   ?>>Ton</option>
                    <option value="4  <?php     if($row['satuanpasokan'] == 4){echo 'selected';}   ?>">Buah</option>
                </select>
                <br><br>
                <input type="submit" value="Perbarui Produk" name="submit">
                </form>
            </div>
        </div>
    </div>
<?php include 'template/footer.php';?>
</body>
</html>