<?php
require './function/adFunctions.php';

$id=$_GET['d'];
$data = "DELETE FROM admin WHERE adminId = $id";

if(mysqli_query($connection, $data)){
    header('Location: all-user.php');
}

?>