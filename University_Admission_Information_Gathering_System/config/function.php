<?php

require_once 'config/config.php';

function get_header(){
    require_once 'include/head.php';
}

function get_menuSmall(){
    require_once 'include/menu_sm.php';
}

function get_navber(){
    require_once 'include/fixnav.php';
}

function get_banner(){
    require_once 'include/banner.php';
}

function get_CurrentNews(){
    require_once 'include/current_news.php';
}

function get_footer(){
    require_once 'include/footer.php';
}

function stu_pro_sidebar(){
    require_once 'include/profile/profile-sidebar.php';
}

function profile_footer(){
    require_once 'include/profile/profile-footer.php';
}

function isLogged() {
    return !empty($_SESSION['s_id']) ? TRUE : FALSE;
}

function needLogged() {
    $isLogged = isLogged();
    if (!$isLogged) {
        ?>
        <script> window.location.assign("login.php") </script>
        <?php
        exit();
    }
}

function bread_query() {
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        if ($page) {
            ?>
            <a href="<?= $page ?>.php"><?= $page ?></a>
            <?php
        }
    }
}

function getdata($commend) {
    global $conn;
    $a = NULL;
    $query = mysqli_query($conn, $commend) or die();

    while ($data = mysqli_fetch_array($query)) {
        $a[] = $data;
    }
    return $a;
}
?>