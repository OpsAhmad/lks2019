<!DOCTYPE html>
<html lang="id">
<head>
    <?php include 'template/head.php';?>
    <title>Daftarkan akun</title>
</head>
<body style="background:#dadada;">
<?php include 'template/navbar.php';?>
    <div class="wrapper" id="wrap" style="margin: 2em auto ;">
        <div class="tememplek4">

        <?php 

        // mengecek apa sudah login atau belum
        if(isset($_POST['login'])){
            header('location:index.php');
        }

        // funngsi daftar
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            $kelompok = $_POST['kelompok'];

            // mengecek apa usernam esudah digunakan atau belum

            $sql = mysqli_query($db,"SELECT * FROM `user` WHERE `username` = '$username' ");
            if(mysqli_num_rows($sql) == 1){
                header ('location:daftar.php?usernameada#pop');
            }else{
                // mengecek apa password sama atau tidak
                if($password == $password2){
                    $sql2 = mysqli_query($db,"INSERT INTO `user` (`username`,`password`,`kelompok`) VALUES ('$username','$password',$kelompok)");
                    if($sql2 == true){
                        header('location:masuk.php?daftarsuccess');
                    }
                    }else{
                        header('location:daftar.php?passnosame#pop');
                }
            }
        }
        
        ?>
            <form action="" method="post">
                <div class="duwur">
                <img src="assets/icon/tambah-profile.svg" alt="icon profile">
                </div>
                <div class="ngisor">
                <h1>Daftar</h1>
                <br>
                <label for=""><b class="p">*</b>Username</label>
                <br>
                <input type="text" name="username" placeholder="Masukan username anda..." required>
                <br>
                <label for=""><b class="p">*</b>Password</label>
                <br>
                <input type="password" name="password" placeholder="Masukan password anda" required>
                <br>
                <label for=""><b class="p">*</b>Verifikasi Password</label>
                <br>
                <input type="password" name="password2" placeholder="Masukan password anda" required>
                <br>
                <label for=""><b class="p">*</b>Pilih Kelompok</label>
                <br>
                <select name="kelompok" id="" class="pilih2" >
                    <option value="1">Petani Sayur</option>
                    <option value="2">Petani Ikan</option>
                </select>
                <br>
                <br>
                <input type="submit" value="Daftar" name="submit">
                </div>
            </div>
            </form>
        </div>
    
    </div>
<?php include 'template/footer.php';?>
</body>
</html>