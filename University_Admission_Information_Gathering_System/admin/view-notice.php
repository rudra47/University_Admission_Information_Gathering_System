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
?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-sm-9">
                    <strong>User Information</strong>
                </div>
                <div class="col-sm-3">
                    <a href="all-notice.php" class="amar_btn"> <i class="fa fa-plus-square"></i> All User</a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="panel-body">
                <div class=""></div>
                <div class="col-md-8">

                    <table class="table">
                        <?php
                        $data = "SELECT * FROM `notice_board` NATURAL JOIN uniwebsitelink";
                        $query = mysqli_query($connection, $data);
                        $row = mysqli_fetch_assoc($query);
                        ?>
                        
                        <tr>
                            <td>University Name</td>
                            <td>:</td>
                            <td><?= $row['university_name']; ?></td>
                        </tr>

                        <tr>
                            <td>Notice</td>
                            <td>:</td>
                            <td><?= $row['not_notice']; ?></td>
                        </tr>

                        <tr>
                            <td>Description</td>
                            <td>:</td>
                            <td><?= $row['not_description']; ?></td>
                        </tr>
                        
                        <tr>
                            <td>File</td>
                            <td>:</td>
                            <td><img src="../upload/<?= $row['not_path']; ?>"></td>
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