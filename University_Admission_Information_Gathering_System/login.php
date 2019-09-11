<?php session_start();
require_once './config/function.php';

get_header();
get_navber();
?>

<div class="container col-md-4 col-md-offset-4" style="border: 2px solid #997f7f;">
    <div class="logo2 col-md-12">
        <h3 align="center">Login</h3>
    </div>
    <div class="from-group col-md-12" >
        <div class=" col-md-12">
            <?php
            if (isset($_SESSION['s_id'])) {
                if ($_SESSION['s_id'] != "") {
                    echo "<script> window.location='profile.php' </script>";
                }
            }
//Login
            if (isset($_POST['submit'])) {
                $l_email = $_POST['email'];
                $l_password = md5($_POST['password']);

                $data = "SELECT * FROM `student_info` WHERE `stu_email` = '$l_email' and `stu_password` = '$l_password' ";
                $query = mysqli_query($connection, $data);
                $row = mysqli_fetch_array($query);
                if ($row != '') {
                    $_SESSION['s_id'] = $row['stu_id'];
                    $_SESSION['stu_name'] = $row['stu_name'];
                    $_SESSION['stu_email'] = $row['stu_email'];
                    $_SESSION['image'] = $row['stu_photo'];
                    $_SESSION['gender'] = $row['stu_gender'];
                    $_SESSION['group_id'] = $row['group_id'];
                    $_SESSION['hsc_regno'] = $row['hsc_regno'];

                    echo "<script> window.location='profile.php' </script>";
                } else {
                    echo "<strong style='color:#e6a7a7;'>Username or Password is not Match</strong>";
                }
            }
            ?>
        </div>
        <form method="post" action="">
            <div class="form-group" style="">
                <label for="">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="********">
            </div>

            <div class="checkbox col-md-6 " style="">
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
            </div>

            <div class="checkbox col-md-5 col-md-offset-1" style="margin-top: 10px;">
                <label>
                    <a href="registration.php">Registration First</a>
                </label>
            </div>

            <div>
                <button type="submit" name="submit" class="btn btn-primary btn-block btn-large">Login</button>
            </div>

            <div class="checkbox col-md-8 col-md-offset-6" style="margin-top: 10px;">
                <label>
                    <a href="forgot-pass.php">Forgot Your Password?</a>
                </label>
            </div>
        </form>
    </div>
</div>

<!--MOdal Code-->

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            ...
        </div>
    </div>
</div>
