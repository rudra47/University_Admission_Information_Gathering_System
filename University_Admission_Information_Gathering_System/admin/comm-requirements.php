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
    $uni_id = $_POST['uni_id'];
    $hsc_res = $_POST['hsc_res'];
    $hsc_out_res = $_POST['hsc_out_res'];
    $ssc_res = $_POST['ssc_res'];
    $ssc_out_res = $_POST['ssc_out_res'];
    $ssc_hsc_res = $_POST['ssc_hsc_res'];
    $ssc_hsc_out_res = $_POST['ssc_hsc_out_res'];
    $hsc_year = $_POST['hsc_year'];
    $ssc_year = $_POST['ssc_year'];
    $unit_name = $_POST['unit_name'];
    $unit_sub = $_POST['unit_sub'];

    $hsc_ict = $_POST['hsc_ict'];
    $hsc_bangla = $_POST['hsc_bangla'];
    $hsc_english = $_POST['hsc_english'];

    $hsc_buss_manage = $_POST['hsc_buss_manage'];
    $hsc_acc = $_POST['hsc_acc'];
    $hsc_buss_finance = $_POST['hsc_buss_finance'];
    $hsc_buss_biponon = $_POST['hsc_buss_biponon'];
    $hsc_buss_islam = $_POST['hsc_buss_islam'];
//INSERT INTO `comm_requirements`(`comm_id`, `uni_id`, `hsc_res`, `hsc_out_res`, `ssc_res`, `ssc_out_res`, 
//        `ssc_hsc_total_res`, `ssc_hsc_total_out_res`, `hsc_year`, `ssc_year`, `unit_name`, `unit_subject`, 
//        `hsc_bangla`, `hsc_english`, `hsc_ict`, `hsc_buss_bebosthapona`, `hsc_buss_accounting`, 
//        `hsc_buss_finance`, `hsc_buss_biponon`, `hsc_buss_islam`)
    
    $data = "INSERT INTO `comm_requirements`(`uni_id`, `hsc_res`, `hsc_out_res`, "
            . "`ssc_res`, `ssc_out_res`, `ssc_hsc_total_res`, `ssc_hsc_total_out_res`, `hsc_year`, `ssc_year`, "
            . "`unit_name`, `unit_subject`, `hsc_bangla`, `hsc_english`, `hsc_ict`,"
            . "`hsc_buss_bebosthapona`, `hsc_buss_accounting`, `hsc_buss_finance`, `hsc_buss_biponon`, "
            . "`hsc_buss_islam`) "
            . "VALUES ('$uni_id','$hsc_res','$hsc_out_res','$ssc_res','$ssc_out_res','$ssc_hsc_res',"
            . " '$ssc_hsc_out_res','$hsc_year','$ssc_year', '$unit_name', '$unit_sub', '$hsc_bangla',"
            . "'$hsc_english','$hsc_ict', '$hsc_buss_manage','$hsc_acc','$hsc_buss_finance', "
            . "'$hsc_buss_biponon','$hsc_buss_islam')";

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
            <strong>Add Commerce Requirements</strong>
        </div>
<!--        <div class="col-sm-3">
            <a href="all-hscResult.php" class="amar_btn"> <i class="fa fa-plus-square"></i> All HSC Result</a>
        </div>-->
        <div class="clearfix"></div>
    </div>
    <div class="panel-body">
        <form name="myform" method="post" action="" enctype="multipart/form-data">
            <div class="form-group col-md-12">
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

            <!--ARTS Group-->
            <div class="form-group col-md-6">
                <label for="hsc_bangla">Bangla * : </label>
                <input type="text" name="hsc_bangla" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_bangla">English * : </label>
                <input type="text" name="hsc_english" id="datepicker" class="form-control" placeholder="Choose">
            </div>
            
            <div class="form-group col-md-6">
                <label for="hsc_ict">ICT * : </label>
                <input type="text" name="hsc_ict" id="hsc_ict" class="form-control" placeholder="Choose">
            </div>

            <!--Comm Group-->

            <div class="form-group col-md-6">
                <label for="hsc_ict">Business Management *</label>
                <input type="text" name="hsc_buss_manage" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_ict">Accounting *</label>
                <input type="text" name="hsc_acc" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_ict">Finance *</label>
                <input type="text" name="hsc_buss_finance" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_ict">Production management *</label>
                <input type="text" name="hsc_buss_biponon" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_ict">hsc_buss_islam *</label>
                <input type="text" name="hsc_buss_islam" id="datepicker" class="form-control" placeholder="Choose">
            </div>


            <!--Comm Group End-->

            <div class="form-group col-md-3 col-md-offset-9">
                <button id="submit" type="reset" value="submit" name="reset" class="btn btn-primary center">Reset</button>
                <button id="submit" type="submit" value="submit" name="submit" class="btn btn-primary center">Submit</button>
            </div>

        </form>
    </div>
</div>

<?php
get_footer();
?>
        