<?php 
require_once '../config/config.php';

function get_header(){
    require_once '../include/admin/adHeader.php';
}
function get_sideber(){
    require_once '../include/admin/adGet_sideber.php';
}
function get_bread(){
    require_once '../include/admin/adBread.php';
}
function get_footer(){
    require_once '../include/admin/adGet_footer.php';
}

function isLogged(){
    return !empty($_SESSION['name'])?TRUE:FALSE;
}

function needLogged(){
    $isLogged = isLogged();
    if (!$isLogged){
        header('Location: ../admin.php');
        exit();
    }
}
?>