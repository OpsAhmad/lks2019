<!DOCTYPE html>
<html lang="id">
<head>
    <?php include 'template/head.php';
    $usss = $_COOKIE['username'];
    if(isset($_GET['kelompok']))
    $filter = $_GET['kelompok'];
    ?>
    <title>Produk saya</title>
</head>
<body style="background:#dadada;">
<?php include 'template/navbar.php';

?>
    <div class="wrapper" id="wrap" style="min-height:60vh;">
        <div class="container produk">
    <h1>Produk saya</h1>

      <div class="cards">
            <?php
            $count = 0;
            $hasilmentah = $conn->prepare("SELECT * FROM `produk` WHERE `penjual` = '$usss' ORDER BY `id` DESC");
            $hasilmentah->execute();
            $hasilmatang = $hasilmentah->fetchAll();
            foreach($hasilmatang as $hasil){
                $count++;
                $addressfoto = 'uploads/'.$hasil['foto'];
                $idproduk = $hasil['id'];
                include 'template/card.php';
            }if($count == 0){
               echo 'Data tidak ada!';
            }
            ?>
        </div>
    </div>

    </div>
<?php include 'template/footer.php';?>
</body>
</html>