<?php

session_start();

$hd = "mysql:host=localhost;dbname=lks2019";
$username = "root";
$password = "";

$conn = new PDO ($hd,$username,$password);

$db = mysqli_connect('localhost','root','','lks2019');

?>