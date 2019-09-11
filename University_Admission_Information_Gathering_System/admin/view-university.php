<?php
session_start();
require_once './function/adFunctions.php';

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


//$data = "SELECT * FROM `university` INNER JOIN universitycategory ON university.uniCat_id = universitycategory.uniCat_id"
//        . "WHERE adminId=$id";
//$query = mysqli_query($connection, $data);
?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-sm-9">
                    <strong>User Information</strong>
                </div>
                <div class="col-sm-3">
                    <a href="all-user.php" class="amar_btn"> <i class="fa fa-plus-square"></i> All User</a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="panel-body">
                <div class=""></div>
                <div class="col-md-8">

                    <table class="table">
                        <?php
                        $id = $_GET['v'];
                        $data = "SELECT * FROM `uniwebsitelink` natural join `universitycategory`"
                                . "WHERE uni_id='$id' ";
                        $query = mysqli_query($connection, $data);
                        $row = mysqli_fetch_array($query);
                        ?>
                        <tr>
                            <td colspan="3" align="center"><img src="../upload/<?= $row['file']; ?>" width="200px"></td>
                        </tr>

                        <tr>
                            <td>University Name</td>
                            <td>:</td>
                            <td><?= $row['university_name']; ?></td>
                        </tr>

                        <tr>
                            <td>University Category </td>
                            <td>:</td>
                            <td><?= $row['categoryName']; ?></td>
                        </tr>

                        <tr>
                            <td>University link</td>
                            <td>:</td>
                            <td><a href="<?= $row['link']; ?>"> <?= $row['link']; ?> </a></td>
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