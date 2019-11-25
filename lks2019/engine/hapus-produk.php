<?php
include 'config.php';

if(!isset($_GET['id'])){
    header ('location:produk.php');
}

$id = $_GET['id'];
$sql = mysqli_query($db,"DELETE FROM `produk` WHERE `id` = $id");
if($sql == true){
    header('location:../produk.php?hapusproduksucces#pop');
}

?>