<!DOCTYPE html>
<html lang="id">
<head>
    <?php include 'template/head.php';?>
    <title>Hubungi Kami</title>
</head>
<body style="background:#dadada;">
<?php include 'template/navbar.php';?>
    <div class="wrapper" id="wrap" style="margin: 2em auto ;">
        <div class="tememplek">
            <div class="kiwo">
                <img src="assets/icon/phone-call.svg" alt="icon edit">
            </div>
            <div class="tengen">
            <form action="?bantuan#pop" method="get">
            <h1 class="judul">Hubungi Kami</h1>
            <br>
             <label for=""><b class="p">*</b>Email anda</label>
             <br>
             <input type="email" name="email" placeholder="alendra@example.com" required>
             <br><br>
             <label for=""><b class="p">*</b>Pesan anda</label>
             <br><br>
             <textarea name="" id="" name="pesan" required placeholder="saya ingin bertanya..." required></textarea>
             <br>
             <br>
             <input type="submit" value="Kirim" name="submit">
             </form>
            </div>
        </div>
    
    </div>
    </div>
<?php include 'template/footer.php';?>
</body>
</html>