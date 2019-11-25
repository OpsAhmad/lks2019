<!DOCTYPE html>
<html lang="id">
<head>
    <?php include 'template/head.php';
    
    if(isset($_GET['kelompok']))
    $filter = $_GET['kelompok'];
    ?>
    <title>Selamat datang di Hasil Panen</title>
</head>
<body style="background:#dadada;">
<?php include 'template/navbar.php';?>
    <div class="wrapper" id="wrap">
        <div class="container produk">
            <?php if(!isset($_GET['kelompok'])) { ?>
    <h1>Semua Produk Kelompok</h1>
            <?php } ?>
            <?php if(isset($_GET['kelompok'])) { ?>

                <?php if($_GET['kelompok']==0) { ?>
    <h1>Semua Produk Kelompok</h1>
            <?php } ?>
                <?php if($_GET['kelompok']==1) { ?>
    <h1>Kelompok Sayuran</h1>
            <?php } ?>
                <?php if($_GET['kelompok']==2) { ?>
    <h1>Kelompok Ikan</h1>
            <?php } ?>

            <?php } ?>
  
    

        <form action="produk.php" method="get">
            <select name="kelompok" id="" class="pilih" onchange="this.form.submit()">
                <option value="0"
                <?php if(!isset($_GET['kelompok'])){
                echo'selected';
                }else if($_GET['kelompok'] == 0){
                        echo 'selected';
                }
                ?>
                >Tampilkan Semua</option>
                <option value="1"
                <?php if(isset($_GET['kelompok'])){
                if($_GET['kelompok'] == 1){
                    echo 'selected';
                }
                }?>
                >Kelompok Sayuran</option>
                <option value="2" 
                <?php if(isset($_GET['kelompok'])){
                if($_GET['kelompok'] == 2){
                    echo 'selected';
                }
                }?>
                >Kelompok Ikan</option>
            </select>
        </form>

      <div class="cards">
            <?php
            if(!isset($_GET['kelompok'])){
            $hasilmentah = $conn->prepare("SELECT * FROM `produk` ORDER BY `id` DESC");
            }else{
                    if($_GET['kelompok']==1){
                        $hasilmentah = $conn->prepare("SELECT * FROM `produk` WHERE `kelompok` = 1  ORDER BY `id` DESC");
                    }
                    else if($_GET['kelompok']==2){
                        $hasilmentah = $conn->prepare("SELECT * FROM `produk` WHERE `kelompok` = 2  ORDER BY `id` DESC");
                    }else{
                        $hasilmentah = $conn->prepare("SELECT * FROM `produk` ORDER BY `id` DESC");
                    }
            }
            $hasilmentah->execute();
            $hasilmatang = $hasilmentah->fetchAll();
            foreach($hasilmatang as $hasil){
                $addressfoto = 'uploads/'.$hasil['foto'];
                $idproduk = $hasil['id'];
                include 'template/card.php';
            }
            ?>
        </div>
    </div>

    </div>
<?php include 'template/footer.php';?>
</body>
</html>