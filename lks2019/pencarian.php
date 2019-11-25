<!DOCTYPE html>
<html lang="id">
<head>
    <?php include 'template/head.php';
    
    if(isset($_GET['kelompok']))
    $filter = $_GET['kelompok'];
    ?>
    <title>Pencarian</title>
</head>
<body style="background:#dadada;">
<?php include 'template/navbar.php';
if(!isset($_POST['search'])){
    header('location:produk.php');
}

// mengambil keyword
$keyword = $_POST['search'];
?>
    <div class="wrapper" id="wrap" style="min-height:60vh;">
        <div class="container produk">
    <h1>Hasil Pencarian "<?php echo $keyword?>"</h1>

      <div class="cards">
            <?php
            $count = 0;
            $hasilmentah = $conn->prepare("SELECT * FROM `produk` WHERE `judul` LIKE '%$keyword%' ORDER BY `id` DESC");
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