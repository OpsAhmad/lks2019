<!-- bagian index dan produk --->
<?php if(isset($_GET['hapus-produk'])){
    $idd = $_GET['hapus-produk'];
    ?>

<div class="popup" id="pop">
    <div class="container popop">
        <p>Apa anda ingin menghapus produk ini?</p>
        <div class="container aksi">
            <a href="engine/hapus-produk.php?id=<?php echo $idd; ?>" class="btn ya">YA</a>
            <a href="#" class="btn tidak">Tidak</a>
        </div>
    </div>
</div>
<?php } ?>

<?php if(isset($_GET['hapus-user'])){
    $idd = $_GET['hapus-user'];
    ?>

<div class="popup" id="pop">
    <div class="container popop">
        <p>Apa anda ingin menghapus produk ini?</p>
        <div class="container aksi">
            <a href="engine/hapus-user.php?id=<?php echo $idd; ?>" class="btn ya">YA</a>
            <a href="#" class="btn tidak">Tidak</a>
        </div>
    </div>
</div>
<?php } ?>

<?php if(isset($_GET['uploadsuccess'])){?>
 <div class="popup" id="pop">
<div class="container popop">
    <br>
        <p>Data berhasil di unggah</p>
        <img src="assets/icon/success.svg" alt="berhasil">
        <div class="container aksi">
            <a href="#" class="btn oke">OKE</a>
        </div>
        <br>
</div>        
    </div> 

<?php } ?>

<?php if(isset($_GET['editusersucces'])){?>
 <div class="popup" id="pop">
<div class="container popop">
    <br>
        <p>user berhasil di edit</p>
        <img src="assets/icon/success.svg" alt="berhasil">
        <div class="container aksi">
            <a href="#" class="btn oke">OKE</a>
        </div>
        <br>
</div>        
    </div> 

<?php } ?>
<?php if(isset($_GET['email'])){?>
 <div class="popup" id="pop">
<div class="container popop">
    <br>
        <p>Terimakasih telah menghubungi kami</p>
        <img src="assets/icon/success.svg" alt="berhasil">
        <div class="container aksi">
            <a href="#" class="btn oke">OKE</a>
        </div>
        <br>
</div>        
    </div> 

<?php } ?>

<?php if(isset($_GET['logout'])){
    ?>

<div class="popup" id="pop">
    <div class="container popop">
        <p>Apa anda ingin keluar dari akun ini?</p>
        <div class="container aksi">
            <a href="engine/logout.php" class="btn ya">YA</a>
            <a href="#" class="btn tidak">Tidak</a>
        </div>
    </div>
</div>
<?php } ?>
<!-- bagian daftar-->
<?php
if(isset($_GET['usernameada'])) {
    ?>
<div class="popup" id="pop">
<div class="container popop">
    <br>
        <p>Username telah digunakan</p>
        <br>
        <div class="container aksi">
            <a href="#" class="btn oke">OKE</a>
        </div>
        <br>
</div>        
    </div>   

<?php } ?>

<?php
if(isset($_GET['passnosame'])) {
    ?>
<div class="popup" id="pop">
<div class="container popop">
    <br>
        <p>Password harus sama</p>
        <br>
        <div class="container aksi">
            <a href="#" class="btn oke">OKE</a>
        </div>
        <br>
</div>        
    </div>   

<?php } ?>
<!-- BAGIAN DAFTAR SELESAI -->

<!-- bagian masuk-->
<?php
if(isset($_GET['passwordsalah'])) {
    ?>
<div class="popup" id="pop">
<div class="container popop">
    <br>
        <p>Password salah</p>
        <br>
        <div class="container aksi">
            <a href="#" class="btn oke">OKE</a>
        </div>
        <br>
</div>        
    </div>   

<?php } ?>

<?php
if(isset($_GET['usernamesalah'])) {
    ?>
<div class="popup" id="pop">
<div class="container popop">
    <br>
        <p>Username Salah</p>
        <br>
        <div class="container aksi">
            <a href="#" class="btn oke">OKE</a>
        </div>
        <br>
</div>        
    </div>   

<?php } ?>
<!-- bagian masuk selesai-->


<!-- <div class="popup" id="pop">
<div class="container popop">
    <br>
        <p>Username salah</p>
        <br>
        <div class="container aksi">
            <a href="#" class="btn oke">OKE</a>
        </div>
        <br>
</div>        
    </div>   -->

    <!-- edit berhasil --->
    <!-- <div class="popup" id="pop">
<div class="container popop">
    <br>
        <p>Edit Berhasil</p>
        <img src="assets/icon/success.svg" alt="berhasil">
        <div class="container aksi">
            <a href="#" class="btn oke">OKE</a>
        </div>
        <br>
</div>        
    </div> -->