<?php
require 'config/config.php';
//if (isset($_SESSION[$_SESSION['stu_name']])) {
//    $s_id = $_SESSION['s_id'];
//
//    $data = mysqli_query($connection, "select * from student_info where stu_id='$s_id'");
//
//    $row = mysqli_fetch_assoc($data);
//    $stu_name = $row['stu_name'];
//}
?>
<body>
    <div class="tamplate">
        <div class="container ">
            <div class="row">
                <div class=" col-sm-12 col-xs-12 col-md-12 col-lg-12 col-lg-offset-0 topper">
                    <?php
                    if (isset($_SESSION['stu_name'])) {
                        ?>
                        <span  style=" float: left; color: #5091e9;">
                            Welcome!<a href=" profile.php" style=" color: black; font-size: 20px;"> <?php echo $_SESSION['stu_name']; ?> </a>
                        </span>
                    <?php }
                    ?> 

                    <ul> 
                        <cite title=" Bangla "><li> <a href="  " style="color: green">  BN </a> </li></cite>
                        <cite title=" English "> <li><a href="  " style="color: black;"> EN </a> </li> </cite>
                         
                        <?php
                        if (isset($_SESSION['s_id']) == "") {
                            ?>

                            <cite title=" Sign In "> <li><a href=" login.php "> SIGN IN </a> </li> </cite>
                            <cite title=" Registration "> <li> <a href=" registration.php "> SIGN UP </a> </li></cite>
                            <?php
                        } else {
                            ?>
                            <cite title=" Sign In "> <li><a href=" logout.php "> SIGN OUT </a> </li> </cite>

                        <?php } ?>
                    </ul>

                </div>

            </div>
        </div>