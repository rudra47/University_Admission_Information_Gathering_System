<?php session_start();
require_once './config/function.php';

get_header();
get_menuSmall();
get_navber();
get_CurrentNews();
stu_pro_sidebar();

$id = $_SESSION['s_id'];
if (isset($_POST['submit'])) {
    $stu_name = validation($_POST['first_name']);
    
    $stu_father = $_POST['stu_father'];
    $stu_mother = $_POST['stu_mother'];
    $school_name = $_POST['school_name'];
    $college_name = $_POST['college_name'];

    $photo = $_FILES['photo'];

    $imageName = 'student-' . time() . '-' . md5(rand(10000, 1000000)) . '.' . pathinfo($photo['name'], PATHINFO_EXTENSION);
    if ($photo == '') {
        $imageName = $_SESSION['image'];
        $quary = "UPDATE `student_info` SET `stu_name`='$stu_name',
                `stu_father`='$stu_father',`stu_mother`='$stu_mother',`stu_school`='$school_name',
                `stu_college`='$college_name',
                `stu_photo`='$imageName' where `stu_id`='$id' ";
        if (mysqli_query($connection, $quary)) {
            if ($imageName != '') {
                move_uploaded_file($photo['tmp_name'], 'upload/' . $imageName);
            }
            echo " <script> alert('Registration Complete'); "
            . "window.location.assign('login.php');</script><br>";
        } else {
            echo "<strong> <script> alert(' Registration Failed ') </script> </strong>";
        }
    } else {
        echo "hello";
        $quary = "UPDATE `student_info` SET `stu_name`='$stu_name',"
                . "`stu_father`='$stu_father',`stu_mother`='$stu_mother',`stu_school`='$school_name',"
                . "`stu_college`='$college_name', "
                . "`stu_photo`='$imageName' where `stu_id`='$id'";
        if (mysqli_query($connection, $quary)) {
            if ($imageName != '') {
                move_uploaded_file($photo['tmp_name'], 'upload/' . $imageName);
            }
            echo " <script> alert('Basic Information Updated'); "
            . "window.location.assign('profile.php');</script><br>";
        } else {
            echo "<strong> <script> alert(' Basic Information Update Fail ') </script> </strong>";
        }
    }
    echo $_SESSION['image'];
}

function validation($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($data == "") {
        echo "<strong> <script> alert(' Please fill all the field ') </script> </strong>";
    }
    return $data;
}
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="col-sm-9">
            <strong>Update Your Basic Info</strong>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="panel-body">
        <form name="myform" method="post" action="" enctype="multipart/form-data">
            <?php
            $info = "select * from student_info natural join student_group where stu_id='$id' ";
            $query = mysqli_query($connection, $info);
            $row = mysqli_fetch_array($query);
            ?>
            <div class="form-group col-md-12">
                <label for="myName">Your Name * :</label>
                <input value="<?= $row['stu_name'] ?>" name="first_name" placeholder="First Name" class="form-control"  type="text">
            </div>

            <div class="form-group col-md-12">
                <label for="myName">Email * :</label>
                <input value="<?= $row['stu_email'] ?>" <?php if($row['stu_email']!=''){echo 'disabled';}?> name="email" placeholder="E-Mail Address" class="form-control"  type="text">
            </div>

            <div class="form-group col-md-12">
                <label for="stu_father">Father Name * :</label>
                <input value="<?= $row['stu_father'] ?>" name="stu_father" id="stu_father" placeholder="Your Father Name" class="form-control"  type="text">
            </div>

            <div class="form-group col-md-12">
                <label for="stu_mother">Mother Name * :</label>
                <input value="<?= $row['stu_mother'] ?>" name="stu_mother" id="stu_mother" placeholder="Your Mother Name" class="form-control"  type="text">
            </div>

            <div class="form-group col-md-12">
                <label for="school_name">School Name * :</label>
                <input value="<?= $row['stu_school'] ?>" name="school_name" id="school_name" placeholder="School Name" class="form-control"  type="text">
            </div>

            <div class="form-group col-md-6">
                <label for="college_name">College Name * :</label>
                <input value="<?= $row['stu_college'] ?>" name="college_name" id="college_name" placeholder="College Name" class="form-control"  type="text">
            </div>

            <div class="form-group col-md-6">
                <label for="college_name">HSC Group * :</label>
                <select name="hsc_group" <?php if($row['hsc_group']!=''){echo 'disabled';}?> id="gender" class="form-control">
                    <option selected>Select One</option>
                    <?php
                    $query = "SELECT * FROM student_group";
                    $result = mysqli_query($connection, $query);
                    while ($group = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?= $group["group_id"] ?>" <?php if ($row['group_id'] === $group["group_id"]) echo 'selected="selected"' ?>> 
                            <?= $group["hsc_group"] ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>

            <div class="form-group col-md-12">
                <label for="user_name">User Name * :</label>
                <input value="<?= $row['stu_username'] ?>" <?php if($row['stu_username']!=''){echo 'disabled';}?> name="user_name" id="user_name" placeholder="User Name" class="form-control"  type="text">
            </div>

            <div class="form-group col-md-12">
                <label for="myName">Image * :</label>
                <input name="photo"  style="padding-top: 5px;"  type="file">
            </div>

            <div class="form-group col-md-4 col-md-offset-9">
                <button type="submit" name="submit" class="btn btn-info ">Submit</button> 
                <button type="reset" class="btn btn-info ">Reset</button> 
            </div> 
            </fieldset>
        </form>
    </div>
</div>
<?php
profile_footer();
get_footer();
?>
