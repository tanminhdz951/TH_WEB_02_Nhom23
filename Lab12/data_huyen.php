<?php
include 'connect.php';
$matp = 0;
if(isset($_GET['matp']))
$matp = $_GET['matp'];
settype($matp,"int");
$stmt = $connect->prepare("select * from devvn_quanhuyen where matp=?");
$stmt->execute([$matp]);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
