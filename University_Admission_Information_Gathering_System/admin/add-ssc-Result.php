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
    $user_name = $_POST['user_name'];
    $ssc_regId = $_POST['ssc_regId'];
    $ssc_roll = $_POST['ssc_roll'];
    $ssc_board = $_POST['ssc_board'];
    $ssc_groupId = $_POST['ssc_groupId'];
    $ssc_year = $_POST['ssc_year'];
    $total_gpa = $_POST['total_gpa'];
    $out_gpa = $_POST['out_gpa'];
    $ssc_bangla = $_POST['ssc_bangla'];
    $ssc_english = $_POST['ssc_english'];
    $ssc_math = $_POST['ssc_math'];
    $ssc_regional = $_POST['ssc_regional'];
    $ssc_bgs = $_POST['ssc_bgs'];
    $ssc_ict = $_POST['ssc_ict'];
    $ssc_phyEdu = $_POST['ssc_phyEdu'];
    
    $ssc_phy = $_POST['ssc_phy'];
    $ssc_chem = $_POST['ssc_chem'];
    $ssc_highMath = $_POST['ssc_highMath'];
    $ssc_bio = $_POST['ssc_bio'];

    $ssc_com_biggan = $_POST['ssc_com_biggan'];
    $ssc_com_acc = $_POST['ssc_com_acc'];
    $ssc_com_bebosaUddog = $_POST['ssc_com_bebosaUddog'];
    $ssc_com_finance = $_POST['ssc_com_finance'];
    
    $ssc_com_vugol = $_POST['ssc_com_vugol'];
    $ssc_com_garostho = $_POST['ssc_com_garostho'];
    $ssc_com_krisi = $_POST['ssc_com_krisi'];
    $ssc_com_pouroniti = $_POST['ssc_com_pouroniti'];
    $ssc_com_eco = $_POST['ssc_com_eco'];

    $data = "INSERT INTO `user_ssc_result`(`user_name`, `registration_no`, `ssc_roll`, `board_id`, `group_Id`, `ssc_year`, `ssc_totalgpa`, "
            . "`ssc_outforthSub`, `ssc_bangla`, `ssc_english`, `ssc_math`, `ssc_regional`, `ssc_bgs`, `ssc_ict`, `ssc_physicalEdu`,"
            . " `ssc_phy`, `ssc_chem`, `ssc_highMath`, `ssc_bio`, `ssc_com_biggan`, `ssc_com_accounting`, `ssc_com_bebosaUddog`, "
            . "`ssc_com_finance`, `ssc_arts_vugol`, `ssc_arts_garostho`, `ssc_arts_krisi`, `ssc_arts_pouroniti`, `ssc_arts_eco`) "
            . "VALUES ('$user_name','$ssc_regId','$ssc_roll','$ssc_board','$ssc_groupId','$ssc_year','$total_gpa','$out_gpa','$ssc_bangla','$ssc_english',"
            . " '$ssc_math','$ssc_regional','$ssc_bgs','$ssc_ict','$ssc_phyEdu','$ssc_phy','$ssc_chem','$ssc_highMath','$ssc_bio',"
            . " '$ssc_com_biggan','$ssc_com_acc','$ssc_com_bebosaUddog','$ssc_com_finance','$ssc_com_vugol','$ssc_com_garostho',"
            . " '$ssc_com_krisi','$ssc_com_pouroniti','$ssc_com_eco')";
    
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
            <strong>Add SSC Result</strong>
        </div>
        <div class="col-sm-3">
            <a href="all-sscResult.php" class="amar_btn"> <i class="fa fa-plus-square"></i> All SSC Result</a>
        </div>
        <div class="clearfix"></div>
    </div>
    
    <div class="panel-body">
        <form name="myform" method="post" action="" enctype="multipart/form-data">
            
            <div class="form-group col-md-12">
                <label for="myName">User Name *</label>
                <input id="myName" name="user_name" class="form-control" type="text" data-validation="required">
            </div>
            
            <div class="form-group col-md-12">
                <label for="myName">SSC Registration No *</label>
                <input id="myName" name="ssc_regId" class="form-control" type="text" data-validation="required">
            </div>
            
            <div class="form-group col-md-6">
                <label for="age">SSC Roll No *</label>
                <input id="age" name="ssc_roll" class="form-control" type="text" min="1" >
            </div>

            <div class="form-group col-md-6">
                <label for="board">Board *</label>
                <select name="ssc_board" id="gender" class="form-control">
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
                <select name="ssc_groupId" id="gender" class="form-control">
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
                <select name="ssc_year" id="gender" class="form-control">
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
                <label for="GPA">Total GPA *</label>
                <input type="text" name="total_gpa" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="outGPA">Without fourth Subject *</label>
                <input type="text" name="out_gpa" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_bangla">Bangla *</label>
                <input type="text" name="ssc_bangla" id="datepicker" class="form-control" placeholder="Choose">
            </div>
            <div class="form-group col-md-6">
                <label for="hsc_bangla">English *</label>
                <input type="text" name="ssc_english" id="datepicker" class="form-control" placeholder="Choose">
            </div>
            
            <div class="form-group col-md-6">
                <label for="hsc_bangla">Math *</label>
                <input type="text" name="ssc_math" id="datepicker" class="form-control" placeholder="Choose">
            </div>
            
            <div class="form-group col-md-6">
                <label for="hsc_bangla">Regional *</label>
                <input type="text" name="ssc_regional" id="datepicker" class="form-control" placeholder="Choose">
            </div>
            
            <div class="form-group col-md-6">
                <label for="hsc_bangla">Bangladesh and Global Studies *</label>
                <input type="text" name="ssc_bgs" id="datepicker" class="form-control" placeholder="Choose">
            </div>
            
            <div class="form-group col-md-6">
                <label for="hsc_bangla">ICT *</label>
                <input type="text" name="ssc_ict" id="datepicker" class="form-control" placeholder="Choose">
            </div>
            
            <div class="form-group col-md-6">
                <label for="hsc_bangla">Physical Education *</label>
                <input type="text" name="ssc_phyEdu" id="datepicker" class="form-control" placeholder="Choose">
            </div>
            
            <div class="form-group col-md-6">
                <label for="hsc_bangla">Physics *</label>
                <input type="text" name="ssc_phy" id="datepicker" class="form-control" placeholder="Choose">
            </div>
            
            <div class="form-group col-md-6">
                <label for="hsc_bangla">Chemistry *</label>
                <input type="text" name="ssc_chem" id="datepicker" class="form-control" placeholder="Choose">
            </div>
            
            <div class="form-group col-md-6">
                <label for="hsc_highmath">Higher Math *</label>
                <input type="text" name="ssc_highMath" id="datepicker" class="form-control" placeholder="Choose">
            </div>
            
            <div class="form-group col-md-6">
                <label for="hsc_bio">Biology *</label>
                <input type="text" name="ssc_bio" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            
            <!--Commerce Group-->
                        
            <div class="form-group col-md-6">
                <label for="hsc_ict">Biggan *</label>
                <input type="text" name="ssc_com_biggan" id="datepicker" class="form-control" placeholder="Choose">
            </div>
            
            <div class="form-group col-md-6">
                <label for="hsc_ict">Accounting *</label>
                <input type="text" name="ssc_com_acc" id="datepicker" class="form-control" placeholder="Choose">
            </div>
            
            <div class="form-group col-md-6">
                <label for="hsc_ict">Bebosha Uddog *</label>
                <input type="text" name="ssc_com_bebosaUddog" id="datepicker" class="form-control" placeholder="Choose">
            </div>
                        
            <div class="form-group col-md-6">
                <label for="">Finance *</label>
                <input type="text" name="ssc_com_finance" id="datepicker" class="form-control" placeholder="Choose">
            </div>
                    
            
            <!--ARTS Groups-->
            
            <div class="form-group col-md-6">
                <label for="hsc_ict">Vugol *</label>
                <input type="text" name="ssc_com_vugol" id="datepicker" class="form-control" placeholder="Choose">
            </div>
                        
            <div class="form-group col-md-6">
                <label for="hsc_ict">Garostho *</label>
                <input type="text" name="ssc_com_garostho" id="datepicker" class="form-control" placeholder="Choose">
            </div>
                        
            <div class="form-group col-md-6">
                <label for="hsc_ict">Krishi *</label>
                <input type="text" name="ssc_com_krisi" id="datepicker" class="form-control" placeholder="Choose">
            </div>

            <div class="form-group col-md-6">
                <label for="hsc_ict">Pouroniti *</label>
                <input type="text" name="ssc_com_pouroniti" id="datepicker" class="form-control" placeholder="Choose">
            </div>
                        
            <div class="form-group col-md-6">
                <label for="hsc_ict">Economic *</label>
                <input type="text" name="ssc_com_eco" id="datepicker" class="form-control" placeholder="Choose">
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
        