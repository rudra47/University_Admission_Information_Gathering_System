<?php
session_start();
require './function/adFunctions.php';

get_header();
get_sideber();
get_bread();
needLogged();
?>

<style>
    .details li {
        list-style: none;
    }
    li {
        margin-bottom:10px;
    }
    .tital{
        text-align:right;
    }
    .contant_i{
        color: #631e1e;
        border-bottom: 1px solid #cea7a7;
    }
    h5{
        color: green;
    }
</style>

<?php
$id = $_GET['v'];

$data = "SELECT * FROM `user_ssc_result` NATURAL JOIN `exam_board` NATURAL JOIN `student_group` "
        . "WHERE `ssc_id` ='$id'";
$query = mysqli_query($connection, $data);
$row = mysqli_fetch_array($query);
?>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-sm-9">
                    <strong>Message Information</strong>
                </div>
                <div class="col-sm-3">
                    <a href="all-sscResult.php" class="amar_btn"> <i class="fa fa-plus-square"></i> All Result</a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="panel-body">
                <div class=""></div>
                <div class="col-md-8">

                    <table class="table">
                        
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><?= $row['user_name']; ?></td>
                        </tr>

                        <tr>
                            <td>Registration No</td>
                            <td>:</td>
                            <td><?= $row['registration_no']; ?></td>
                        </tr>
                        
                        <tr>
                            <td>Roll No</td>
                            <td>:</td>
                            <td><?= $row['ssc_roll']; ?></td>
                        </tr>
                        
                        <tr>
                            <td>Board Name</td>
                            <td>:</td>
                            <td><?= $row['board_name']; ?></td>
                        </tr>
                        
                        <tr>
                            <td>Group Name</td>
                            <td>:</td>
                            <td><?= $row['group_name']; ?></td>
                        </tr>
                        
                        <tr>
                            <td>Total GPA</td>
                            <td>:</td>
                            <td><?= $row['ssc_totalgpa']; ?></td>
                        </tr>
                        
                        <tr>
                            <td>GPA with out forth Sub</td>
                            <td>:</td>
                            <td><?= $row['ssc_outforthSub']; ?></td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="panel-footer">
                .
            </div>
        </div>
    </div>
</div>




<?php
get_footer();
?>