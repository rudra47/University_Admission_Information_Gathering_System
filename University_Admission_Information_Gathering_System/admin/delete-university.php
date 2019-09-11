<?php
require_once './function/adFunctions.php';

$id=$_GET['d'];
$data = "DELETE FROM `university` WHERE `un_id` = '$id'";

if(mysqli_query($connection, $data)){
    header('Location: all-university.php');
}

?>