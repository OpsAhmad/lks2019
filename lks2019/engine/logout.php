<?php
// fungsi logout

session_start();
session_unset();
session_destroy();

setcookie('username','');
setcookie('id','');

header('location: ../index.php');
?>