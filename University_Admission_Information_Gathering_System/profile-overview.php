<?php
session_start();
require_once './config/function.php';
get_header();
get_menuSmall();
get_navber();
get_CurrentNews();
stu_pro_sidebar();
?>
<?php ?>
<style>
    .details li {
        list-style: none;
    }
    li {
        margin-bottom:10px;
    }
    .tital{
        text-align:right;
    }
    .contant_i{
        color: #631e1e;
        border-bottom: 1px solid #cea7a7;
    }
    h5{
        color: green;
    }
</style>

<?php
//$id = $_GET['v'];
//
//$data = "SELECT * FROM student_info  WHERE stu_id=$id";
//$query = mysqli_query($connection, $data);
?>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-sm-9">
                    <strong>User Information</strong>
                </div>
                <div class="col-sm-3">
                    <a href="all-user.php" class="amar_btn"> <i class="fa fa-plus-square"></i> All User</a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="panel-body">
                <div class=""></div>
                <div class="col-md-8 col-md-offset-2">

                    <table class="table">
                        <?php
                        $id = $_GET['v'];
                        $data = "SELECT * FROM `student_info` natural join student_group "
                                . "WHERE `stu_id`='$id'";
                        $query = mysqli_query($connection, $data);
                        $row = mysqli_fetch_assoc($query);

                        ?>
                        <tr>
                            <?php
                            if ($row['stu_gender'] == 'male' && $row['stu_photo'] == 0) {
                            ?>
                                <td colspan="3" align="center"><img src="image/boy.png" class="img-responsive" width="40%"> </td>
                                <?php
                            } elseif ($row['stu_gender'] == 'female' && $row['stu_photo'] == 0) {
                                ?>
                                <td colspan="3" align="center"><img src="image/girl.png" class="img-responsive" width="40%"> </td>
                                <?php
                            } elseif ($row['stu_photo'] != '') {
                                ?>
                                <td colspan="3" align="center"><img src="upload/<?= $row['stu_photo']; ?>" width="50%"></td>
                                <?php
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><?= $row['stu_name']; ?></td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?= $row['stu_email']; ?></td>
                        </tr>

                        <tr>
                            <td>Hsc Group</td>
                            <td>:</td>
                            <td><?= $row['hsc_group']; ?></td>
                        </tr>

                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td><?= $row['stu_gender']; ?></td>
                        </tr>

                        <tr>
                            <td>School Name</td>
                            <td>:</td>
                            <td><?= $row['stu_school']; ?></td>
                        </tr>
                        <tr>
                            <td>College Name</td>
                            <td>:</td>
                            <td><?= $row['stu_college']; ?></td>
                        </tr>
                        <tr>
                            <td>Father Name</td>
                            <td>:</td>
                            <td><?= $row['stu_father']; ?></td>
                        </tr>

                        <tr>
                            <td>Mother Name</td>
                            <td>:</td>
                            <td><?= $row['stu_mother']; ?></td>
                        </tr>

                        <tr>
                            <td>User Name</td>
                            <td>:</td>
                            <td><?= $row['stu_username']; ?></td>
                        </tr>
                    </table>
                    <div class="col-md-12" align="right">
                        <a href="profile-edit.php"> Update Your Basic info</a>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                .
            </div>
        </div>
    </div>
</div>



<?php
profile_footer();
get_footer();
?>
