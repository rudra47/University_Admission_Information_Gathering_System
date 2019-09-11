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

        <div class="panel panel-primary">
            <div class="panel-heading"> Forgot Password
            </div>
            <div class="panel-body">
                <?php
                if (isset($_SESSION['s_id'])) {
                    if ($_SESSION['s_id'] != "") {
                        echo "<script> window.location='profile.php' </script>";
                    }
                }
//Login
                if (isset($_POST['submit'])) {
                    $email = $_POST['email'];
                    $hsc_group = $_POST['hsc_group'];

                    $data = "SELECT * FROM `student_info` WHERE `stu_email` = '$email' "
                            . "and `group_id` = '$hsc_group'";
                    $query = mysqli_query($connection, $data);
                    $row = mysqli_fetch_array($query);
                    if ($row != '') {
                        echo "<script> window.location='new-pass.php?v=".$row['stu_id']."' </script>";
//                        $_SESSION['stu_id'] = $row['stu_id'];
                    } else {
                        echo "<strong style='color:#e6a7a7;'>Something Is Wrong</strong>";
                    }
                }
                ?>

                <form name="" method="post" action="">
                    <div class="form-group" style="">
                        <label for="">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Your email address" name="email">
                    </div>

                    <div class="form-group">
                        <label >Your HSC Group : </label>

                        <select name="hsc_group" id="gender" class="form-control">
                            <option selected>Select One</option>
                            <?php
                            $query = "SELECT * FROM student_group";
                            $result = mysqli_query($connection, $query);
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<option value= " ' . $row["group_id"] . ' "> ' . $row["hsc_group"] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-1 col-md-offset-10" style=" padding: 10px 0; ">
                        <button id="submit" type="submit" value="submit" name="submit" class="btn btn-primary center">Submit</button>
                    </div>
            </div>
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
