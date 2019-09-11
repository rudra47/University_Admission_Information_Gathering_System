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

    $hsc_ict = $_POST['hsc_ict'];
    $hsc_bangla = $_POST['hsc_bangla'];
    $hsc_english = $_POST['hsc_english'];
    $hsc_his = $_POST['hsc_his'];
    $hsc_pouroniti = $_POST['hsc_pouroniti'];
    $hsc_SoScience = $_POST['hsc_SoScience'];
    $hsc_SoWork = $_POST['hsc_SoWork'];
    $hsc_eco = $_POST['hsc_eco'];
    $hsc_logic = $_POST['hsc_logic'];
    $hsc_IsHis = $_POST['hsc_IsHis'];
    $hsc_IsStudy = $_POST['hsc_IsStudy'];
    $subject_total = $_POST['subject_total'];

    $data = "INSERT INTO `arts_requirments`(`uni_id`, `hsc_result`, `hsc_out_res`, "
            . "`ssc_res`, `ssc_out_res`, `hsc_ssc_total`, `hsc_ssc_out_res`, `ssc_year`, `hsc_year`, "
            . "`unit_name`, `unit_subject`, `hsc_bangla`, `hsc_english`, `hsc_ict`, `hsc_arts_etihas`, "
            . "`hsc_arts_pouronity`, `hsc_arts_SoScience`, `hsc_arts_sowork`, `hsc_arts_economy`, "
            . "`hsc_arts_juktibidda`, `hsc_arts_isletihas`, `hsc_arts_islstudy`, `subject_total`) "
            . "VALUES ('$uni_id','$hsc_res','$hsc_out_res','$ssc_res','$ssc_out_res',"
            . " '$ssc_hsc_res','$ssc_hsc_out_res','$ssc_year','$hsc_year','$unit_name','$unit_sub','$hsc_bangla',"
            . " '$hsc_english','$hsc_ict','$hsc_his','$hsc_pouroniti','$hsc_SoScience',"
            . " '$hsc_SoWork','$hsc_eco','$hsc_logic','$hsc_IsHis','$hsc_IsStudy','$subject_total')";
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
            <strong>Add Arts Requirements</strong>
        </div>
        <div class="col-sm-3">
            <a href="" class="amar_btn"> <i class="fa fa-plus-square"></i> All Arts Requirements</a>
        </div>
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
            
            <div class="form-group col-md-6">
                <label for="subject_total">Total Subject : </label>
                <input type="text" name="subject_total" id="subject_total" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-3">
                <button id="submit" type="submit" value="submit" name="submit" class="btn btn-primary center">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php
get_footer();
?>
        