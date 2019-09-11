<?php
    require './config.php';
?>
<div class="container">
    <div class="row profile">
        <div class="col-lg-12">
            <div class="col-lg-3">
                <div class="profile-sidebar" style="" >
                    <div class="profile-userpic"  >
                        <?php
                        $id = $_SESSION['s_id'];
                        $data = "SELECT * FROM `student_info` natural join student_group "
                                . "WHERE `stu_id`='$id'";
                        $query = mysqli_query($connection, $data);
                        $row = mysqli_fetch_assoc($query);

                        if ($row['stu_gender'] == 'male' && $row['stu_photo'] == 0) {
                            ?>
                            <img src="image/boy.png" class="img-responsive"> 
                            <?php
                        } elseif ($row['stu_gender'] == 'female' && $row['stu_photo'] == 0) {
                            ?>
                            <img src="image/girl.png" class="img-responsive">
                            <?php
                        }elseif ($row['stu_photo'] != 0) {
                            ?>
                            <img src="upload/<?= $_SESSION['image'] ?>" class="img-responsive" height="50%" >
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    if ($_SESSION['image'] == '') {
                        ?>
                        <marquee> Please Insert Your Image </marquee>
                        <?php
                    }
                    ?>
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                        </div>
                        <div class="profile-usertitle-job">
                            Applicant
                        </div>
                    </div>  
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="" >
                                <a href="profile.php" style="color: black; font-size: 20px;" select="selected">
                                    <i class="glyphicon glyphicon-home" style=" margin-right: 20px; "></i>
                                    Home
                                </a> 
                            </li>
                            <li class="" >
                                <a href="profile-overview.php?v=<?= $_SESSION['s_id']; ?>" style="color: black; font-size: 20px;">
                                    <i class="glyphicon glyphicon-eye-open" style=" margin-right: 20px; "></i>
                                    Overview 
                                </a>
                            </li>
                            <li class="" >
                                <?php
                                $a = $_SESSION['group_id'];
                                ?>
                                <a href="<?php
                                if ($a == 1) {
                                    echo 'profile-update-sc.php';
                                } elseif ($a == 2) {
                                    echo 'profile-update-arts.php';
                                } elseif ($a == 3) {
                                    echo 'profile-update-com.php';
                                }
                                ?>" style="color: black; font-size: 20px;">
                                    <i class="glyphicon glyphicon-check" style=" margin-right: 20px; "></i>
                                    <?php
                                    require 'config.php';
                                    $data = "select * from student_info";
                                    $query = mysqli_query($connection, $data);
                                    $row = mysqli_fetch_array($query);
                                    if ($row['hsc_regno'] == 0 || $row['hsc_year']==0) {
                                        ?>
                                        <lebel style="font-family: Impact; color: #1b6d85;">Update</lebel>
                                        <?php
                                    } else {
                                        ?>
                                        Update
                                        <?php
                                    }
                                    ?>
                                </a>
                            </li>
                            <li id="">
                                <a href="profile-edit.php" style="color: black; font-size: 20px;">
                                    <i class="glyphicon glyphicon-user" style=" margin-right: 20px; "></i>
                                    Edit Profile 
                                </a>
                            </li>
                            <li id="">
                                <a href="profile-notification.php" style="color: black; font-size: 20px;">
                                    <i class="glyphicon glyphicon-ok" style=" margin-right: 20px; "></i>
                                    Notice
                                </a>
                            </li>
                            <li>
                                <a href="logout.php" style="color: black; font-size: 20px;">
                                    <i class="glyphicon glyphicon-flag"></i>
                                    logout 
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>
            <div class=" defult col-lg-9" align="" style=" ">
                <div class="profile-content">
                    <div class=" col-lg-12 col-md-12">
