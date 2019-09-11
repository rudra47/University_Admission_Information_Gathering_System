<?php session_start();
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

$data = "SELECT * FROM `contuct_us` where conus_id='$id'";
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
                    <a href="all-message.php" class="amar_btn"> <i class="fa fa-plus-square"></i> All Message</a>
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
                            <td><?= $row['conus_name']; ?></td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?= $row['conus_email']; ?></td>
                        </tr>

                        <tr>
                            <td>Message </td>
                            <td>:</td>
                            <td><?= $row['conus_massage']; ?></td>
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