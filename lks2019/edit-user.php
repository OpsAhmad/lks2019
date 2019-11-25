<!DOCTYPE html>
<html lang="id">
<head>
    <?php include 'template/head.php';?>
    <title>Edit user</title>
</head>
<body style="background:#dadada;">
<?php include 'template/navbar.php';

if(!isset($_GET['id'])){
    header('location:profile.php');
}

// mengecek admin bukan
if(!isset($_SESSION['admin'])){
    header('location:index.php');
}
$id = $_GET['id'];

$sql = mysqli_query($db,"SELECT * FROM `user` WHERE `id` = $id");
$row = mysqli_fetch_assoc($sql);

// mengupdate data user
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $kelompok = $_POST['kelompok'];
    $otorisasi = $_POST['otorisasi'];

    $sql2 = mysqli_query($db,"UPDATE `user` SET `username` = '$username' , `kelompok` = $kelompok , `otorisasi` = $otorisasi WHERE `id` = $id");
    if($sql2 == true){
        setcookie('kelompok',$kelompok);
        setcookie('username',$username);
        header('location:profile.php?editusersucces#pop');
    }
}

?>
    <div class="wrapper" id="wrap">
        <div class="tememplek">
            <div class="kiwo">
                <img src="assets/icon/edit-profile.svg" alt="icon edit">
            </div>
            <div class="tengen">
                <form action="" method="post">
                <h1 class="judul">Edit User</h1>
                <br>
                <br>
                <label for=""><b class="p">*</b>Username</label>
                <br>
                <input type="text" name="username" placeholder="Ikhwan" value="<?php echo $row['username'];?>">
                <br><br>
               
                <label for=""><b class="p">*</b>Kelompok Tani</label>
                <br>
                <select name="kelompok" id="">
                    <option value="1" <?php if($row['kelompok'] == 1){echo 'selected';}?>>Sayur</option>
                    <option value="2" <?php if($row['kelompok'] == 2){echo 'selected';}?>>Ikan</option>
                </select>
                <br><br>
                <label for=""><b class="p">*</b>Otorisasi</label>
                <br>
                <select name="otorisasi" id="">
                    <option value="0" <?php if($row['otorisasi'] == 0){echo 'selected';}?>>Tidak ada</option>
                    <option value="1" <?php if($row['otorisasi'] == 1){echo 'selected';}?>>Admin</option>
                </select>
                <br><br>
                <input type="submit" value="Perbarui User" name="submit">
                </form>
            </div>
        </div>
    </div>
<?php include 'template/footer.php';?>
</body>
</html>