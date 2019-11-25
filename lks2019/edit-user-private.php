<!DOCTYPE html>
<html lang="id">
<head>
    <?php include 'template/head.php';?>
    <title>Edit profil saya</title>
</head>
<body style="background:#dadada;">
<?php include 'template/navbar.php';

if(!isset($_GET['id'])){
    header('location:profile.php');
}

// mengecek admin bukan
if(!isset($_SESSION['login'])){
    header('location:masuk.php');
}
$id = $_GET['id'];

$sql = mysqli_query($db,"SELECT * FROM `user` WHERE `id` = $id");
$row = mysqli_fetch_assoc($sql);

// mengupdate data user
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $kelompok = $_POST['kelompok'];

    $sql2 = mysqli_query($db,"UPDATE `user` SET `username` = '$username' , `kelompok` = $kelompok WHERE `id` = $id");
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
                <input type="submit" value="Perbarui User" name="submit">
                </form>
            </div>
        </div>
    </div>
<?php include 'template/footer.php';?>
</body>
</html>