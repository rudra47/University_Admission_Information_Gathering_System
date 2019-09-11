<?php session_start();
require './function/adFunctions.php';

get_header();
get_sideber();
get_bread();
needLogged();
?>

<?php
if (isset($_POST['submit'])) {
    $uni_id = $_POST['uni_id'];
    $hsc_res = $_POST['hsc_res'];
    $hsc_out_res = $_POST['hsc_out_res'];
    $hsc_year = $_POST['hsc_year'];
    $ssc_res = $_POST['ssc_res'];
    $ssc_out_res = $_POST['ssc_out_res'];
    $ssc_year = $_POST['ssc_year'];
    $ssc_hsc_res = $_POST['ssc_hsc_res'];
    $ssc_hsc_out_res = $_POST['ssc_hsc_out_res'];
    $unit_name = $_POST['unit_name'];
    $unit_sub = $_POST['unit_sub'];
    $hsc_bangla = $_POST['hsc_bangla'];
    $hsc_english = $_POST['hsc_english'];
    $hsc_chem = $_POST['hsc_chem'];
    $hsc_phy = $_POST['hsc_phy'];
    $hsc_math = $_POST['hsc_math'];
    $hsc_bio = $_POST['hsc_bio'];
    $hsc_computer = $_POST['hsc_computer'];
    $hsc_ict = $_POST['hsc_ict'];
    $subject_total = $_POST['subject_total'];

    $data = " INSERT INTO `science_requirement`(`uni_id`, `hsc_result`, `hsc_out_res`, `ssc_res`, `ssc_out_res`, `hsc_ssc_total`, "
            . "`hsc_ssc_out_res`, `ssc_year`, `hsc_year`, `unit_name`, `unit_subject`, `hsc_bangla`, `hsc_english`, `hsc_ict`, "
            . "`hsc_chemistry`, `hsc_physics`, `hsc_math`, `hsc_biology`, `hsc_comp`, `subject_total`) "
            . "VALUES ('$uni_id','$hsc_res','$hsc_out_res','$ssc_res','$ssc_out_res',"
            . " '$ssc_hsc_res','$ssc_hsc_out_res','$ssc_year','$hsc_year','$unit_name','$unit_sub','$hsc_bangla',"
            . " '$hsc_english','$hsc_ict','$hsc_chem','$hsc_phy','$hsc_math', '$hsc_bio', '$hsc_computer',"
            . " '$subject_total')";
    
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
            <strong>Add Science Requirements</strong>
        </div>
        <div class="col-sm-3">
            <a href="" class="amar_btn"> <i class="fa fa-plus-square"></i> All Science Requirements</a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="panel-body">
        <form name="myform" method="post" action="" enctype="multipart/form-data">
            <div class="form-group col-md-6">
                <label for="uni_id"> Select University * : </label>
                <select name="uni_id" id="uni_id" class="form-control">
                    <option selected>Select One</option>
                    <?php
                    $select = "SELECT * FROM uniwebsitelink";
                    $query = mysqli_query($connection, $select);
                    while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <option value="<?= $row['uni_id'] ?>"> <?= $row['university_name'] ?> </option>
                        <?php
                    }
                    ?>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_res">HSC Result * : </label>
                <input id="hsc_res" name="hsc_res" class="form-control" type="text" min="1" >
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_out_res">HSC without 4th sub * : </label>
                <input id="hsc_out_res" name="hsc_out_res" class="form-control" type="text" min="1" >
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_year">HSC Passing Year * : </label>
                <select name="hsc_year" id="hsc_year" class="form-control">
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
                <label for="ssc_res">SSC Result * : </label>
                <input id="ssc_res" name="ssc_res" class="form-control" type="text" min="1" >
            </div>

            <div class="form-group col-md-6">
                <label for="ssc_out_res">SSC without 4th sub * : </label>
                <input id="ssc_out_res" name="ssc_out_res" class="form-control" type="text" min="1" >
            </div>

            <div class="form-group col-md-6">
                <label for="ssc_year">SSC Passing Year * : </label>
                <select name="ssc_year" id="ssc_year" class="form-control">
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
                <label for="ssc_hsc_res">SSC + HSC total GPA * : </label>
                <input id="ssc_hsc_res" name="ssc_hsc_res" class="form-control" type="text" min="1" >
            </div>

            <div class="form-group col-md-6">
                <label for="ssc_hsc_out_res">SSC + HSC without 4th sub GPA * : </label>
                <input id="ssc_hsc_out_res" name="ssc_hsc_out_res" class="form-control" type="text" min="1" >
            </div>

            <div class="form-group col-md-6">
                <label for="unit_name">Unit Name * : </label>
                <input id="unit_name" name="unit_name" class="form-control" type="text" min="1" >
            </div>

            <div class="form-group col-md-6">
                <label for="unit_sub">Unit Subjects * :</label>
                <input id="unit_sub" name="unit_sub" class="form-control" type="text" min="1" >
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_bangla">Bangla * : </label>
                <input type="text" name="hsc_bangla" id="datepicker" class="form-control" placeholder="Choose">
            </div>
            
            <div class="form-group col-md-6">
                <label for="hsc_bangla">English * : </label>
                <input type="text" name="hsc_english" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_bangla">Chemistry * : </label>
                <input type="text" name="hsc_chem" id="datepicker" class="form-control" placeholder="Choose">
            </div>
            
            <div class="form-group col-md-6">
                <label for="hsc_bangla">Physics * : </label>
                <input type="text" name="hsc_phy" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_bangla">Math * : </label>
                <input type="text" name="hsc_math" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_bio">Biology * : </label>
                <input type="text" name="hsc_bio" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_computer">Computer * : </label>
                <input type="text" name="hsc_computer" id="hsc_computer" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_ict">ICT * : </label>
                <input type="text" name="hsc_ict" id="hsc_ict" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="subject_total">Total Subject : </label>
                <input type="text" name="subject_total" id="subject_total" class="form-control" placeholder="Choose">
            </div>
            
            <div class="form-group col-md-3 col-md-offset-5">
                <button id="reset" type="reset"  class="btn btn-primary center">Reset</button>
                <button id="submit" type="submit" value="submit"  name="submit" class="btn btn-primary center">Submit</button>
            </div>

        </form>
    </div>
</div>

<?php
get_footer();
?>
        