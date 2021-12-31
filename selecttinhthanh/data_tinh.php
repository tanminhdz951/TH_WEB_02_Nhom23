<?php
include "DModel.php";
$stmt = $connect->prepare("select * from devvn_quanhuyen");
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
