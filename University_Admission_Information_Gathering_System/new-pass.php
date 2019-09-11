<?php
session_start();
require_once './config/function.php';

get_header();
?>

<div class="container col-md-6 col-md-offset-3" style="border: 2px solid #997f7f;">
    <div class="logo2 col-md-12"> 
        <h3 align="center">Forgot Password</h3>
    </div> 
    <div class="from-group col-md-12" >
        <div class=" col-md-12">
            <?php
            if (isset($_SESSION['s_id'])) {
                if ($_SESSION['s_id'] != "") {
                    echo "<script> window.location='profile.php' </script>";
                }
            }
            
            $id = $_GET['v'];
//Login
            if (isset($_POST['submit'])) {
                $new_pass = md5($_POST['new_pass']);
                $re_pass = md5($_POST['re_pass']);

                if ($new_pass == $re_pass) {
                    $data = "UPDATE `student_info` SET `stu_password` = '$new_pass' WHERE `stu_id`='$id'";
                    
                    if (mysqli_query($connection, $data)) {
                        echo 'done';
                        echo "<script> window.location='login.php' </script>";
                    }
                } else {
                    echo "<strong style='color:#e6a7a7;'>Password is not Match</strong>";
                }
            }
            ?>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading"> Forgot Password
            </div>
            <div class="panel-body">
                <form name="" method="post" action="">
                    <div class="form-group" style="">
                        <label for="">New Password</label>
                        <input type="password" class="form-control" placeholder="Enter New Password" name="new_pass">
                    </div>

                    <div class="form-group" style="">
                        <label for="">Re-Password</label>
                        <input type="password" class="form-control" placeholder="Re-Enter Your New Password" name="re_pass">
                    </div>

                    <div class="form-group col-md-1 col-md-offset-10" style=" padding: 10px 0; ">
                        <button id="submit" type="submit" value="submit" name="submit" class="btn btn-primary center">Submit</button>
                    </div>
                </form>
            </div>
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
