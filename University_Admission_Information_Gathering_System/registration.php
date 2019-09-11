<?php
require_once './config/function.php';

get_header();
get_navber();
get_menuSmall();
get_CurrentNews();
?>
<div class="container col-md-8 col-md-offset-2">

    <form class="well form-horizontal"  name="register-form" id="register-form" method="post" role="form" enctype="multipart/form-data">
        <fieldset>
            <legend><center><h2><b>Registration Form</b></h2></center></legend><br>
            <div class="col-md-8 col-md-offset-2">
                <?php
                if (isset($_POST['submit'])) {
                    $stu_name = validation($_POST['name']);
                    $stu_email = validation($_POST['email']);
                    $hsc_group = validation($_POST['hsc_group']);
                    $stu_password = md5($_POST['user_password']);
                    $stu_confirm_pass = md5($_POST['confirm_password']);
                    $gender = $_POST['gender'];
                    $photo = $_FILES['stu_photo'];

                    $data = "SELECT * FROM `student_info` WHERE `stu_email`= '$stu_email' ";
                    $quary = mysqli_query($connection, $data);
                    if (mysqli_num_rows($quary)) {
                        echo '<script> alert("This email id already taken")</script';
                    } else {
                        if ($photo != '') {
                            $imageName = 'student-' . time() . '-' . md5(rand(10000, 1000000)) . '.' . pathinfo($photo['name'], PATHINFO_EXTENSION);
                            if ($stu_password == $stu_confirm_pass) {
                                $quary = "INSERT INTO `student_info`( `stu_name`, `stu_email`,`group_id`, `stu_password`, `stu_gender`, "
                                        . "`stu_photo`)"
                                        . "VALUES ('$stu_name', '$stu_email','$hsc_group', '$stu_password','$gender','$imageName')";
                                if (mysqli_query($connection, $quary)) {
                                    if ($imageName != '') {
                                        move_uploaded_file($photo['tmp_name'], 'upload/' . $imageName);
                                    }
                                    echo " <script> alert('Registration Complete'); "
                                    . "window.location.assign('login.php');</script><br>";
                                } else {
                                    ?>
                                    <div class="alert alert-danger">
                                        Registration<strong> Failed!</strong>
                                    </div>
                                    <?php
                                }
                            }
                        } else {
                            if ($stu_password == $stu_confirm_pass) {
                                $quary = "INSERT INTO `student_info`( `stu_name`, `stu_email`,`group_id`, `stu_password`, `stu_gender`, )"
                                        . "VALUES ('$stu_name', '$stu_email','$hsc_group', '$stu_password','$gender')";
                                if (mysqli_query($connection, $quary)) {
                                    echo " <script> alert('Registration Complete'); "
                                    . "window.location.assign('login.php');</script><br>";
                                } else {
                                    echo "<strong> <script> alert(' Registration Failed ') </script> </strong>";
                                }
                            } else {
                                echo "<strong> <script> alert(' Password is not match ') </script> </strong>";
                            }
                        }
                    }
                }

                function validation($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);

                    return $data;
                }
                ?>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label"> Name</label>  
                <div class="col-md-4 ">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="name" placeholder=" Name" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">E-Mail</label>  
                <div class="col-md-4 ">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input  name="email" placeholder="E-Mail Address" class="form-control"  type="email">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="dob">Your HSC Group </label>
                <div class="col-md-4 ">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
                        <select id="ddd" name="hsc_group" id="gender" class="form-control">
                            <option value="">Select One</option>
                            <?php
                            $query = "SELECT * FROM student_group";
                            $result = mysqli_query($connection, $query);
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<option value= " ' . $row["group_id"] . ' "> ' . $row["hsc_group"] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" >Password</label> 
                <div class="col-md-4 ">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input  id="pw" name="user_password" placeholder="Password" class="form-control"  type="password" >
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" >Confirm Password</label> 
                <div class="col-md-4 ">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input  name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password">
                    </div>
                </div>
            </div>

            <!--Success message--> 
            <div class="form-group">
                <label class="col-md-4 control-label">Gender</label> 
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <select  name="gender" id="gender" class="form-control">
                             <option value="" >Select</option>
                            <option value="1" >Male</option>
                            <option value="2">Female</option>
                            <option value="3">Other</option>
                        </select>
                    </div> 
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" >Image</label> 
                <div class="col-md-4 ">
                    <div class="input-group">
                        <input name="stu_photo"  style="padding-top: 5px;"  type="file">
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4"><br>
                    <button type="submit" name="submit" class="btn btn-warning btn-block btn-large">Registration</button> 
                </div> 
            </div>

        </fieldset>
    </form>
</div>

<?php
get_footer();
?>