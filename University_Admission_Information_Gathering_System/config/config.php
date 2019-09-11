<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uaigs";

$connection = new mysqli($servername, $username, $password, $dbname);

if($connection!=TRUE){
    die("Connection faild");
} else {
    
}
?>