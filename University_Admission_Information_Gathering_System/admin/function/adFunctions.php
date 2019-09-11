<?php
require_once '../config.php';

function get_header() {
    require_once 'includes/adHeader.php';
}

function get_sideber() {
    require_once 'includes/adGet_sideber.php';
}

function get_bread() {
    require_once 'includes/adBread.php';
}

function get_footer() {
    require_once 'includes/adGet_footer.php';
}

function isLogged() {
    return !empty($_SESSION['name']) ? TRUE : FALSE;
}

function needLogged() {
    $isLogged = isLogged();
    if (!$isLogged) {
        ?>
        <script> window.location.assign("index.php")</script>
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

function bread_query2() {
    if (isset($_GET['page2'])) {
        $page2 = $_GET['page2'];
        if ($page2) {
            ?>
            <a href="<?= $page2 ?>.php">/<?= $page2 ?></a>
            <?php
        }
    }
}
?>