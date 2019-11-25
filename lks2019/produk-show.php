<!DOCTYPE html>
<html lang="id">
<head>
    <?php include 'template/head.php';?>
    <title>Menampilkan produk</title>
</head>
<body>
<?php include 'template/navbar.php';

if(!isset($_GET['id'])){
    header('location:produk.php');
}
$id = $_GET['id'];

$sql = mysqli_query($db,"SELECT * FROM `produk` WHERE `id` = $id");
$row = mysqli_fetch_assoc($sql);

$addressfoto = 'uploads/'.$row['foto'];
$judul = $row['judul'];
$jumlahpasokan = $row['jumlahpasokan'];
$satuanpasokan = $row['satuanpasokan'];
$penjual = $row['penjual'];
$nohp = $row['nohp'];
$tanggal = $row['tanggal'];
$deskripsi = $row['deskripsi'];
?>
    <div class="wrapper" id="wrap">
        <div class="ps">
            <div class="container ps">
            <div class="ps-kiri">
            <img src="<?php echo $addressfoto;?>" alt="gambar produk">
            </div>
            <div class="ps-kanan">
                <div class="ps-kanan2">
                    <h2><?php echo $judul;?></h2>
                    <p>Jumlah pasokan: <?php echo $jumlahpasokan;?> <?php
                     if($satuanpasokan == 1){
                         echo 'Gram';
                     }
                     if($satuanpasokan == 2){
                         echo 'Kilogram';
                     }
                     if($satuanpasokan == 3){
                         echo 'Ton';
                     }
                     if($satuanpasokan == 4){
                         echo 'Buah';
                     }
                         ?></p>
                    <br>
                    <h2>Kontak:</h2>
                    <img src="assets/icon/profile.svg" alt="icon profile">
                    <p><b><?php echo $penjual;?></b> </p>
                    <p>No Hp: <?php echo $nohp;?></p>
                    <p>Tanggal upload: <?php echo $tanggal;?></p>
                </div>
            </div>
            </div>
            <div class="ps-tengah">
                <h1 class="judul">Deskripsi</h1>
                <div class="deskripsi">
                    <p><?php echo nl2br($deskripsi);?></p>
                </div>
                <?php
                // mengunggah komentar 
                if(isset($_POST['submit'])){
                    $pengirim = $_POST['pengirim'];
                    $tanggal = $_POST['tanggal'];
                    $komentar = $_POST['komentar'];

                    $sql2 = mysqli_query($db,"INSERT INTO `diskusi` (`pengirim`,`tanggal`,`komentar`,`target`) VALUES ('$pengirim','$tanggal','$komentar',$id)");
                    if($sql2 == true){
                        header ('location:produk-show.php?id='.$id);
                    }
                }
                ?>
                <form action="" method="post">
                <h1 class="judul">Diskusi</h1>
                <?php if(isset($_SESSION['login'])) { ?>
                <input type="hidden" name="pengirim" value="<?php echo $_COOKIE['username'];?>">
                <input type="hidden" name="tanggal" value="<?php echo date('d M Y');?>">
                <textarea style="height:100px;" name="komentar" id="" cols="" rows="" placeholder="Beri komentar disini.." required></textarea>
                <br>
                <input type="submit" value="Beri Komentar" name="submit">
                <?php }else{ ?>
                    <p class="pusingg"><a href="masuk.php">Masuk</a> ke akun untuk dapat berdiskusi</p>
                <?php } ?>
                </form>   
                <!-- KOMENTAR TIMEE YUHUUUUUUUUUUUUUUUUUUUUUUUUUUUU --->
                <?php
                $diskusimentah = $conn->prepare("SELECT * FROM  `diskusi` WHERE `target` = $id ORDER BY `id` DESC");
                $diskusimentah->execute();
                $diskusimatang = $diskusimentah->fetchAll();
                foreach($diskusimatang as $diskusi){

                    //mengambil data yaa
                    $pengirim = $diskusi['pengirim'];
                    $tanggal = $diskusi['tanggal'];
                    $komentar = $diskusi['komentar'];
                ?>
                <div class="komentar">
                    <p><b> <?php echo $pengirim;?></b> &nbsp; <?php echo $tanggal;?></p>
                    <br>
                    <p><?php echo nl2br($komentar);?></p>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php include 'template/footer.php';?>
</body>
</html>