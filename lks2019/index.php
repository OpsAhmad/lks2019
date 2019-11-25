<!---::::::::::::::::::::::::::
::CREATED BY MUHAMMAD ALENDRA::
::FOR LKS PROVINSI DIY 2019  ::
::::::::::::::::::::::::::::-->

<!DOCTYPE html>
<html lang="id">
<head>
    <?php include 'template/head.php';?>
    <title>Selamat datang di Hasil Panen</title>
</head>
<body>
<?php include 'template/navbar.php';?>
    <div class="wrapper">
        <div class="jumbotron">
            <div class="jumbotron-title">
                <h1>Hai, Sahabat Petani!</h1>
                <p>Hasil panen hadir dengan layanan transaksi di bidang pertanian</p>
                <br>
                <a href="#banner" class="lanjut-btn">Lanjut</a>
            </div>
        </div>

        <div class="banner" id="banner"></div>

        <div class="container judul">
            <h1 class="judul" style="width:200px;">Pilih Kelompok</h1>
        </div>
        <div class="kelompok-list">
            <div class="kelompok k1">
                <a href="produk.php?kelompok=2">
                <p>Petani Ikan</p>
            </a>
            </div>
            <div class="kelompok k2">
                <a href="produk-show.php?kelompok=1">
                <p>Petani Sayur</p>
            </a>
            </div>
        </div>
        <div class="container judul">
            <h1 class="judul" style="width:230px;">Status Terbaru</h1>
        </div>
        <div class="cards">
            <?php
            $hasilmentah = $conn->prepare("SELECT * FROM `produk` ORDER BY `id` DESC LIMIT 4");
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
<?php include 'template/footer.php';?>

</body>
</html>