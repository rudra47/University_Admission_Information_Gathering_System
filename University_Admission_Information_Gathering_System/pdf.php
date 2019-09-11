<?php
require_once './config.php';
$id=$_GET['id'];

$data= "SELECT * FROM notice_board WHERE not_id='$id'";
$query = mysqli_query($connection, $data);
$row = mysqli_fetch_assoc($query);

$file = 'upload/'.$row['not_path'];
$filename = $row['not_path'];
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');
@readfile($file);
?>