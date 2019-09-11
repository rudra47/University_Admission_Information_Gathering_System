<?php
require './function/adFunctions.php';

$id=$_GET['d'];
$data = "DELETE FROM notice_board WHERE not_id = $id";

if(mysqli_query($connection, $data)){
    header('Location: all-notice.php');
}

?>