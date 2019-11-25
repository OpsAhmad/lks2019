<?php
include 'config.php';

if(!isset($_GET['id'])){
    header ('location:profile.php');
}

$id = $_GET['id'];
$sql = mysqli_query($db,"DELETE FROM `user` WHERE `id` = $id");
if($sql == true){
    header('location:../profile.php?hapususerberhasil#pop');
}

?>