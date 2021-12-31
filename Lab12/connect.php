<?php
     $connection = 'mysql:dbname=quanly_qr_code;host=localhost';
     $user = 'root';
     $pass = '';

$connect = new PDO($connection , $user , $pass);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connect->exec("SET CHARACTER SET utf8")
?>