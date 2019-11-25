<div class="topnav" id="myTopnav">
    <div class="topnav-container">
    <a href="index.php" class="logo-pojok">
    <img src="assets/image/logo-big-white.png" alt="logo hasil panen">
    </a>
    <a href="index.php" title=" Menu Beranda">Beranda</a>
    <a href="produk.php" title="Kelompok pertanian">Produk</a>
    <a href="tentang.php" title="Tentang kami">Tentang</a>
    <a href="bantuan.php" title="Hubungi Bantuan">Bantuan</a>
    <form action="pencarian.php" method="post">
    <input type="text" name="search" class="search" placeholder="Cari produk tani...">
    </form>
    <?php if(!isset($_SESSION['login'])){?>
    <a href="daftar.php" class="daftar-btn" title="Daftar akun baru">Daftar</a>
    <a href="masuk.php" class="masuk-btn" title="Masuk ke akun  ">Masuk</a>
    <?php }else{ ?>
        <a href="profile.php" class="masuk-btn" title="Lihat profil saya  "><?php echo substr($_COOKIE['username'],0,8);?>..</a>
    <?php } ?>
    <a href="#" class="icon" onclick="nav()">
    <img src="assets/icon/bars.png" alt="icon bars" class="bars">
    </a>
    </div>
</div>