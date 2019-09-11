<?php
require './function/adFunctions.php';

$id=$_GET['d'];
$data = "DELETE FROM con_us WHERE con_id = $id";

if(mysqli_query($connection, $data)){
    header('Location: all-message.php');
}

?>