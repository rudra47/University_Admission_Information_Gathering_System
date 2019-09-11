<?php session_start();
require_once './config/function.php';

get_header();
get_menuSmall();
get_navber();
get_CurrentNews();
stu_pro_sidebar();
?>

<h3 align="center"> Notification  </h3>

<marquee> No Notification at now </marquee>

<?php
profile_footer();
get_footer();
?>
