<?php
include 'connect.php';
$maqh = 0;
if(isset($_GET['maqh']))
$maqh = $_GET['maqh'];
settype($maqh,"int");
$stmt = $connect->prepare("select * from devvn_xaphuongthitran where maqh=?");
$stmt->execute([$maqh]);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
