<script src="assets/js/script.js"></script>
<?php
// hit counter

$visits = mysqli_query($db,"SELECT * FROM `hit`");
$row = mysqli_fetch_assoc($visits);
// memasukan tambahan nilai
$addkunjungan = $row['kunjungan'];
$visits2 = mysqli_query($db,"UPDATE `hit` SET `kunjungan`= $addkunjungan + 1");
?>
<footer>
    <div class="container sisi">
        <div class="sisi kiri">
            <img src="assets/image/logo-big-white.png" alt="lofo hasil panen">
            <p>Hasil Panen hadir sebagai solusi terkini di bidang transaksi digital pertanian</p>
        </div>
        <div class="sisi kanan">
            kami telah dikunjungi sebanyak:
            <h1><?php echo number_format($addkunjungan);?> kali</h1>
        </div>
    </div>
    <div class="sisi bawah">
        <p>Butuh bantuaan? <a href="bantuan.php" title="Hubungi bantuan">Hubungi Kami</a></p>
        &copy;Hasil Panen<?php echo date('Y');?> 
        <br>
    </div>
</footer>
<?php include 'template/popup.php';?>