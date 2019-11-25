<div class="card">
                <a href="produk-show.php?id=<?php echo $idproduk;?>">
                <img src="<?php echo $addressfoto;?>" alt="gambar produk" class="gambar-produk">
            <h2>
            <div class="container profile">
                    <p><img src="assets/icon/profile.svg" alt="icon profile"> <?php echo substr($hasil['penjual'],0,10);?></p>
                </div>
                <?php echo $hasil['judul'];?>
              
                <p>Jumlah: <?php echo number_format($hasil['jumlahpasokan'],0,',','.');?> <span>
                    <?php
                     if($hasil['satuanpasokan'] == 1) {
                         echo 'gram';
                     } 
                     if($hasil['satuanpasokan'] == 2) {
                         echo 'kilogram';
                     } 
                     if($hasil['satuanpasokan'] == 3) {
                         echo 'ton';
                     } 
                     if($hasil['satuanpasokan'] == 4) {
                         echo 'buah';
                     } 
                    ?>
                    </span></p>
                </a>
                <?php if(isset($_SESSION['admin'])){ ?>
                <div class="container aksi">
                    <a href="?hapus-produk=<?php echo $idproduk;?>#pop" class="btn hapus">Hapus</a>
                    <a href="edit-produk.php?id=<?php echo $idproduk;?>" class="btn edit">Edit</a>
                </div>
                <?php } ?>

                </h2>    

 </div>