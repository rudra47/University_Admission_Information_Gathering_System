<?php
session_start();
require './function/adFunctions.php';

get_header();
get_sideber();
get_bread();
needLogged();
?>

<?php
if (isset($_POST['submit'])) {
    $hsc_regId = $_POST['hsc_regId'];
    $hsc_roll = $_POST['hsc_roll'];
    $hsc_board = $_POST['hsc_board'];
    $hsc_groupId = $_POST['hsc_groupId'];
    $hsc_year = $_POST['hsc_year'];
    $gender = $_POST['gender'];
    $total_gpa = $_POST['total_gpa'];
    $out_gpa = $_POST['out_gpa'];
    $hsc_bangla = $_POST['hsc_bangla'];
    $hsc_english = $_POST['hsc_english'];
    $hsc_chem = $_POST['hsc_chem'];
    $hsc_phy = $_POST['hsc_phy'];
    $hsc_math = $_POST['hsc_math'];
    $hsc_bio = $_POST['hsc_bio'];
    $hsc_computer = $_POST['hsc_computer'];
    $hsc_ict = $_POST['hsc_ict'];

    $hsc_his = $_POST['hsc_his'];
    $hsc_pouroniti = $_POST['hsc_pouroniti'];
    $hsc_SoScience = $_POST['hsc_SoScience'];
    $hsc_SoWork = $_POST['hsc_SoWork'];
    $hsc_eco = $_POST['hsc_eco'];
    $hsc_logic = $_POST['hsc_logic'];
    $hsc_IsHis = $_POST['hsc_IsHis'];
    $hsc_IsStudy = $_POST['hsc_IsStudy'];

    $data = "INSERT INTO `user_hsc_result`(`hsc_regId`, `hsc_roll`, `board_id`, `hsc_year`, "
            . "`group_id`, `gender`, `total_gpa`, `out_forthsubGpa`, `hsc_bangla`, `hsc_english`, "
            . "`hsc_ict`, `hsc_chemistry`, `hsc_physics`, `hsc_math`, `hsc_biology`, `hsc_comp`,"
            . "`hsc_arts_History`, `hsc_arts_Municipality`, `hsc_arts_SoScience`, `hsc_arts_SoWork`,"
            . "`hsc_arts_Economy`, `hsc_arts_jukti`, `hsc_arts_islEtihas`, `hsc_arts_islStudy`) "
            . "VALUES ('$hsc_regId','$hsc_roll','$hsc_board','$hsc_year','$hsc_groupId','$gender',"
            . " '$total_gpa','$out_gpa','$hsc_bangla','$hsc_english','$hsc_ict','$hsc_chem','$hsc_phy',"
            . " '$hsc_math','$hsc_bio','$hsc_computer','$hsc_his','$hsc_pouroniti','$hsc_SoScience',"
            . " '$hsc_SoWork','$hsc_eco','$hsc_logic','$hsc_IsHis','$hsc_IsStudy')";
    if (mysqli_query($connection, $data)) {
        echo "<script> alert('Data Inserted') </script>";
    } else {
        echo "<script> alert('data Insertion Feild')</script>";
    }
}
?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="col-sm-9">
            <strong>Add HSC Result</strong>
        </div>
        <div class="col-sm-3">
            <a href="all-hscResult.php" class="amar_btn"> <i class="fa fa-plus-square"></i> All HSC Result</a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="panel-body">
        <form name="myform" method="post" action="" enctype="multipart/form-data">
            <div class="form-group col-md-6">
                <label for="myName">HSC Registration No *</label>
                <input id="myName" name="hsc_regId" class="form-control" type="text" data-validation="required">
            </div>
            
            <div class="form-group col-md-6">
                <label for="age">HSC Roll No *</label>
                <input id="age" name="hsc_roll" class="form-control" type="text" min="1" >
            </div>

            <div class="form-group col-md-6">
                <label for="board">Board *</label>
                <select name="hsc_board" id="gender" class="form-control">
                    <option selected>Select One</option>
                    <?php
                    $select = "SELECT * FROM exam_board";
                    $query = mysqli_query($connection, $select);
                    while ($board = mysqli_fetch_array($query)) {
                        ?>
                        <option value="<?= $board['board_id'] ?>"> <?= $board['board_name'] ?> </option>
                        <?php
                    }
                    ?>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="group">Group *</label>
                <select name="hsc_groupId" id="gender" class="form-control">
                    <option selected>Select One</option>
                    <?php
                    $gr_select = "SELECT * FROM student_group";
                    $group_query = mysqli_query($connection, $gr_select);
                    while ($group = mysqli_fetch_array($group_query)) {
                        ?>
                        <option value="<?= $group['group_id'] ?>"> <?= $group['group_name'] ?> </option>
                        <?php
                    }
                    ?>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="dob">Year</label>
                <select name="hsc_year" id="gender" class="form-control">
                    <option selected>Select One</option>
                    <option>2017</option>
                    <option>2016</option>
                    <option>2015</option>
                    <option>2014</option>
                    <option>2013</option>
                    <option>2012</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control">
                    <option selected>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
                <span id="error_gender" class="text-danger"></span>
            </div>

            <div class="form-group col-md-6">
                <label for="GPA">Total GPA *</label>
                <input type="text" name="total_gpa" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="outGPA">Without fourth Subject *</label>
                <input type="text" name="out_gpa" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_bangla">Bangla *</label>
                <input type="text" name="hsc_bangla" id="datepicker" class="form-control" placeholder="Choose">
            </div>
            <div class="form-group col-md-6">
                <label for="hsc_bangla">English *</label>
                <input type="text" name="hsc_english" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_bangla">Chemistry *</label>
                <input type="text" name="hsc_chem" id="datepicker" class="form-control" placeholder="Choose">
            </div>
            <div class="form-group col-md-6">
                <label for="hsc_bangla">Physics *</label>
                <input type="text" name="hsc_phy" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_bangla">Math *</label>
                <input type="text" name="hsc_math" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_bio">Biology *</label>
                <input type="text" name="hsc_bio" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_computer">Computer *</label>
                <input type="text" name="hsc_computer" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_ict">ICT *</label>
                <input type="text" name="hsc_ict" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <!--ARTS Group-->

            <div class="form-group col-md-6">
                <label for="hsc_ict">History *</label>
                <input type="text" name="hsc_his" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_ict">Municipalities *</label>
                <input type="text" name="hsc_pouroniti" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_ict">Social Science *</label>
                <input type="text" name="hsc_SoScience" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_ict">Social Work *</label>
                <input type="text" name="hsc_SoWork" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_ict">Economics *</label>
                <input type="text" name="hsc_eco" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_ict">Logics *</label>
                <input type="text" name="hsc_logic" id="datepicker" class="form-control" placeholder="Choose">
            </div>
            <div class="form-group col-md-6">
                <label for="hsc_ict">Islamic History *</label>
                <input type="text" name="hsc_IsHis" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_ict">Islamic Study *</label>
                <input type="text" name="hsc_IsStudy" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <!--ARTS Group End-->

            <div class="form-group col-md-3">
                <button id="submit" type="submit" value="submit" name="submit" class="btn btn-primary center">Submit</button>
            </div>

        </form>
    </div>
</div>

<?php
get_footer();
?>
        