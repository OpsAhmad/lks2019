<!DOCTYPE html>
<html lang="id">
<head>
    <?php include 'template/head.php';?>
    <title>Profile anda</title>
</head>
<body style="background:#dadada;">
<?php include 'template/navbar.php';?>
    <div class="wrapper" id="wrap" style="margin: 2em auto ;">
        <div class="tememplek4">
            <form action="" method="post">
                <div class="duwur">
                <img src="assets/icon/profile.svg" alt="icon profile">
                </div>
                <div class="ngisor">
                <h1>
                    <?php if(isset($_SESSION['admin'])){
                        echo $_COOKIE['username']. '&nbsp;[Admin]';
                    }else{
                        echo $_COOKIE['username'];
                        echo '<br>';
                        if($_COOKIE['kelompok']==1){
                        echo '<p style="font-size:12pt;">Kelompok: Sayuran</p>';
                        }else{
                            echo '<p style="font-size:12pt;">Kelompok: ikan</p>';
                        }
                    }
                    ?>
                </h1>
                <br>
             <div class="container aksi">
     
                 <a href="edit-user-private.php?id=<?php echo $_COOKIE['id'];?>" class="btn oke">Edit profil saya</a>
                 <a href="produk-saya.php?id=<?php echo $_COOKIE['id'];?>" class="btn oke">Produk saya</a>
                 <a href="upload.php" class="btn edit">Unggah Produk</a>
                 <br>
                 <br>
                 <br>
                 <a href="?logout#pop" class="btn hapus">Keluar</a>
                
             </div>
            </div>
            </form>
        </div>

        <!--mengelola user--->
        <br>
        <?php if(isset($_SESSION['admin'])){ ?>
        <h1 class="judul">
            Kelola user
        </h1>
        <div class="cards-user">
            <?php
                //  MELIHAT DATA USER
                $usermentah = $conn->prepare("SELECT * FROM `user`");
                $usermentah->execute();
                $usermatang = $usermentah->fetchAll();

                foreach($usermatang as $user){
                    // ambil data 
                    $namauser = $user['username'];
                    $iduser = $user['id'];
            ?>
            <div class="card-user">
                <img src="assets/icon/profile.svg" alt="icon profile">
                <p><?php echo substr($namauser,0,12);?></p>
                <br>
                <div class="container aksi">
                     <a href="?hapus-user=<?php echo $iduser;?>#pop" class="btn hapus" style="font-size:11pt;">Hapus</a>
                     <a href="edit-user.php?id=<?php echo $iduser;?>" class="btn edit" style="font-size:11pt;">Edit</a>
                 </div>
                 <br>
            </div>
                <?php } ?>
    
        </div>
                <?php } ?>
        <!-- mengelola user selesai --->
    </div>
<?php include 'template/footer.php';?>
</body>
</html>