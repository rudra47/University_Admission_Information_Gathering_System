<?php
session_start();
require_once './config/function.php';
//error_reporting(0);

get_header();
get_menuSmall();
get_navber();
get_CurrentNews();
stu_pro_sidebar();
needLogged();
?>

<?php
$v = $_SESSION['s_id'];
$info = "select * from student_info where stu_id='$v' ";
$st_query = mysqli_query($connection, $info);
$row = mysqli_fetch_array($st_query);
?>

<?php
$id = $_SESSION['s_id'];
if (isset($_POST['submit'])) {
    $total_gpa = $_POST['total_gpa'];
    $out_gpa = $_POST['out_gpa'];
    $ssc_total_gpa = $_POST['ssc_total_gpa'];
    $ssc_out_gpa = $_POST['ssc_out_gpa'];

    $ssc_hsc_gpa = $_POST['ssc_hsc_gpa'];

    $hsc_bangla = $_POST['hsc_bangla'];
    $hsc_english = $_POST['hsc_english'];

    $hsc_his = $_POST['hsc_his'];
    $hsc_pouroniti = $_POST['hsc_pouroniti'];
    $hsc_SoScience = $_POST['hsc_SoScience'];
    $hsc_SoWork = $_POST['hsc_SoWork'];
    $hsc_eco = $_POST['hsc_eco'];

    $hsc_ict = $_POST['hsc_ict'];
    $hsc_year = $_POST['hsc_year'];
    $ssc_year = $_POST['ssc_year'];

    if ($_POST['hsc_regId'] == '' || $_POST['hsc_roll'] == '') {
        $data = "UPDATE `student_info` SET `hsc_regno`='$hsc_regId',`hsc_roll`='$hsc_roll',`hsc_total_gpa`='$total_gpa',"
                . "`out_fourth_gpa`='$out_gpa',`ssc_gpa`='$ssc_total_gpa', `ssc_out_gpa`='$ssc_out_gpa',"
                . "`ssc_hsc_gpa`='$ssc_hsc_gpa', `hsc_bangla`='$hsc_bangla', `hsc_english`='$hsc_english',"
                . "`hsc_his`='$hsc_his',`hsc_pouroniti`='$hsc_pouroniti',`hsc_SoScience`='$hsc_SoScience',"
                . "`hsc_SoWork`='$hsc_SoWork',`hsc_eco`='$hsc_eco',`hsc_ict`='$hsc_ict' where stu_id='$id'";
        if (mysqli_query($connection, $data)) {
            echo "<script> alert('Data Updated') </script>";
        } else {
            echo "<script> alert('Update Failed')</script>";
        }
    } else {
        $hsc_regId = $_POST['hsc_regId'];
        $hsc_roll = $_POST['hsc_roll'];

        $data = "SELECT * FROM `student_info` WHERE `hsc_roll`= '$hsc_roll' OR `hsc_regno`= '$hsc_regId' ";
        $quary = mysqli_query($connection, $data);
        if (mysqli_num_rows($quary)) {
            echo '<script> alert("This Registration no or Roll no already taken") < /script';
        } else {
            $data = "UPDATE `student_info` SET `hsc_regno`='$hsc_regId',`hsc_roll`='$hsc_roll',`hsc_total_gpa`='$total_gpa',"
                    . "`out_fourth_gpa`='$out_gpa',`ssc_gpa`='$ssc_total_gpa', `ssc_out_gpa`='$ssc_out_gpa',"
                    . "`ssc_hsc_gpa`='$ssc_hsc_gpa', `hsc_bangla`='$hsc_bangla', `hsc_english`='$hsc_english',"
                    . "`hsc_his`='$hsc_his',`hsc_pouroniti`='$hsc_pouroniti',`hsc_SoScience`='$hsc_SoScience',"
                    . "`hsc_SoWork`='$hsc_SoWork',`hsc_eco`='$hsc_eco',`hsc_ict`='$hsc_ict' where stu_id='$id'";
            if (mysqli_query($connection, $data)) {
                echo "<script> alert('Data Updated') </script>";
            } else {
                echo "<script> alert('Update Failed')</script>";
            }
        }
    }
}
?>

<h3 align="center"> Update Profile </h3>

<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="col-sm-9">
            <strong align="center"> Fill The Requirements with HSC Label </strong>
        </div>

        <div class="clearfix"></div>
    </div>
    <div class="panel-body">
        <form name="myform" method="post" action="" enctype="multipart/form-data">
            <div class="form-group col-md-6">
                <label for="myName">HSC Registration No *</label>
                <input id="myName" name="hsc_regId" value="<?= $row['hsc_regno'] ?>" <?php
if ($row['hsc_regno'] != '') {
    echo 'disabled';
}
?> class="form-control" type="text" data-validation="required">
            </div>

            <div class="form-group col-md-6">
                <label for="age">HSC Roll No *</label>
                <input id="age" name="hsc_roll" value="<?= $row['hsc_roll'] ?>" <?php
                if ($row['hsc_roll'] != '') {
                    echo 'disabled';
                }
?> class="form-control" type="text" min="1" >
            </div>

            <div class="form-group col-md-6">
                <label for="GPA">HSC Total GPA *</label>
                <input type="text" name="total_gpa" value="<?= $row['hsc_total_gpa'] ?>" id="datepicker" class="form-control" placeholder="total gpa">
            </div>

            <div class="form-group col-md-6">
                <label for="outGPA">HSC Without fourth Subject Total GPA *</label>
                <input type="text" name="out_gpa" value="<?= $row['out_fourth_gpa'] ?>" id="outGPA" class="form-control" placeholder="Without fourth Subject Total GPA">
            </div>

            <div class="form-group col-md-6">
                <label for="dob">HSC Year</label>
                <select name="hsc_year" id="gender" class="form-control">
                    <option selected>Select One</option>
                    <option<?php
                if ($row['hsc_year'] != '2017') {
                    echo 'selected';
                }
?> >2017</option>
                    <option <?php
                        if ($row['hsc_year'] != '2016') {
                            echo 'selected';
                        }
                        ?>>2016</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="dob">SSC Year</label>
                <select name="ssc_year" id="gender" class="form-control">
                    <option selected>Select One</option>
                    <option <?php
                    if ($row['ssc_year'] != '2015') {
                        echo 'selected';
                    }
                        ?> >2015</option>
                    <option <?php
                        if ($row['ssc_year'] != '2014') {
                            echo 'selected';
                        }
                        ?> >2014</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="GPA">SSC Total GPA *</label>
                <input type="text" name="ssc_total_gpa" value="<?= $row['ssc_gpa'] ?>" id="datepicker" class="form-control" placeholder="SSC total gpa">
            </div>

            <div class="form-group col-md-6">
                <label for="outGPA">SSC Without fourth Subject Total GPA *</label>
                <input type="text" name="ssc_out_gpa" value="<?= $row['ssc_out_gpa'] ?>" id="datepicker" class="form-control" placeholder="SSC Without fourth Subject Total GPA">
            </div>

            <div class="form-group col-md-12">
                <label for="ssc_hsc_gpa">SSC + HSC Total GPA *</label>
                <input type="text" name="ssc_hsc_gpa" value="<?= $row['ssc_hsc_gpa'] ?>" id="ssc_hsc_gpa" class="form-control" placeholder="SSC + HSC Total GPA">
            </div>

            <!--ARTS Group-->

            <div class="form-group col-md-6">
                <label for="hsc_bangla">Bangla (HSC)*</label>
                <input type="text" name="hsc_bangla" value="<?= $row['hsc_bangla'] ?>" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_bangla">English (HSC)*</label>
                <input type="text" name="hsc_english" value="<?= $row['hsc_english'] ?>" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_ict">History *</label>
                <input type="text" name="hsc_his" value="<?= $row['hsc_his'] ?>" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_ict">Municipalities *</label>
                <input type="text" name="hsc_pouroniti" value="<?= $row['hsc_pouroniti'] ?>" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_ict">Social Science *</label>
                <input type="text" name="hsc_SoScience" value="<?= $row['hsc_SoScience'] ?>" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_ict">Social Work *</label>
                <input type="text" name="hsc_SoWork" value="<?= $row['hsc_SoWork'] ?>" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_ict">Economics *</label>
                <input type="text" name="hsc_eco" value="<?= $row['hsc_eco'] ?>" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_ict">ICT (HSC)*</label>
                <input type="text" name="hsc_ict" value="<?= $row['hsc_ict'] ?>" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <!--ARTS Group End-->

            <div class="form-group col-md-3">
                <button id="submit" type="submit" value="submit" name="submit" class="btn btn-primary center">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php
profile_footer();
get_footer();
?>
