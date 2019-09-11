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

$data = "SELECT * FROM admin INNER JOIN adminroll ON admin.roll_id = adminroll.roll_id WHERE adminId=$id";
$query = mysqli_query($connection, $data);
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
                        $data = "SELECT * FROM admin INNER JOIN adminroll ON admin.roll_id = adminroll.roll_id "
                                . "where admin.adminId = $id";

                        $query = mysqli_query($connection, $data);
                        $row = mysqli_fetch_assoc($query);
                        ?>
                        <tr>
                            <td colspan="3" align="center"><img src="upload/<?= $row['photo']; ?>" width="200px"></td>
                        </tr>

                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><?= $row['name']; ?></td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?= $row['email']; ?></td>
                        </tr>

                        <tr>
                            <td>Phone</td>
                            <td>:</td>
                            <td><?= $row['phone']; ?></td>
                        </tr>

                        <tr>
                            <td>Age</td>
                            <td>:</td>
                            <td><?= $row['age']; ?></td>
                        </tr>

                        <tr>
                            <td>Date of Birth</td>
                            <td>:</td>
                            <td><?= $row['dateOfBirth']; ?></td>
                        </tr>

                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td><?= $row['gender']; ?></td>
                        </tr>

                        <tr>
                            <td>User Name</td>
                            <td>:</td>
                            <td><?= $row['username']; ?></td>
                        </tr>

                        <tr>
                            <td>Position</td>
                            <td>:</td>
                            <td><?= $row['roll_name']; ?></td>
                        </tr>
                        
                        <tr>
                            <td>Description </td>
                            <td>:</td>
                            <td><?= $row['discription']; ?></td>
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