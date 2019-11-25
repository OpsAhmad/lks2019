<!DOCTYPE html>
<html lang="id">
<head>
    <?php include 'template/head.php';?>
    <title>Masuk ke akun anda</title>
</head>
<body style="background:#dadada;">
<?php include 'template/navbar.php';?>
    <div class="wrapper" id="wrap" style="margin: 2em auto ;">
        <div class="tememplek3">
            <?php 
            // YUK LOGIN DULU
            if(isset($_SESSION['login'])){
                header ('location:index.php');
            }
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $password = $_POST['password'];

                // mengecek apa username benar atau salah
                $sql= mysqli_query($db,"SELECT * FROM `user` WHERE  `username` = '$username'");
                if(mysqli_num_rows($sql) == 1){
                    $row = mysqli_fetch_assoc($sql); // mengambil data
                    //mengecek password
                    if($password == $row['password']){
                        // mengecek admin atau bukan
                        if($row['otorisasi'] == 1){
                            $_SESSION['admin'] = true;
                            $_SESSION['login'] = true; // session login umum
                            setcookie('username',$row['username']); // menyimpan cookie lezat nyammm
                            setcookie('id',$row['id']);
                            setcookie('kelompok',$row['kelompok']);
                            header('location:index.php');
                        }else{
                            $_SESSION['login'] = true; // session login umum
                            setcookie('username',$row['username']); // menyimpan cookie lezat nyammm
                            setcookie('id',$row['id']);
                            setcookie('kelompok',$row['kelompok']);
                            header('location:index.php');
                        }
                    }else{
                        header('location:masuk.php?passwordsalah#pop');
                    }
                    }else{
                        header('location:masuk.php?usernamesalah#pop');
                }
            }

            
            ?>
            <form action="" method="post">
                <div class="duwur">
                <img src="assets/icon/profile.svg" alt="icon profile">
                </div>
                <div class="ngisor">
                <h1>Masuk</h1>
                <br>
                <label for=""><b class="p">*</b>Username</label>
                <br>
                <input type="text" name="username" placeholder="Masukan username anda..." required>
                <br>
                <label for=""><b class="p">*</b>Password</label>
                <br>
                <input type="password" name="password" placeholder="Masukan password anda" required>
                <br><br>
                <input type="submit" value="Masuk" name="submit">
                </div>
            </div>
            </form>
        </div>
    
    </div>
<?php include 'template/footer.php';?>
</body>
</html>