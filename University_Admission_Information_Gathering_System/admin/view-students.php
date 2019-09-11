<?php
require '../config/adFunctions.php';

get_header();
get_sideber();
get_bread();
needLogged();
?>

<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-sm-9">
                <strong>Table Information</strong>
            </div>
            <div class="col-sm-3">
                <a href="add-user.php" class="amar_btn"> <i class="fa fa-plus-square"></i> Add Student</a>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="panel-body">
            <table class="table table-striped table-responsive table-hover amar_table">
                <thead>

                    <tr>
                        <th>Name</th>
                        <th>Institute Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Photo</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $data = "SELECT * FROM `student_info`";

                    $query = mysqli_query($connection, $data);
                    while ($row = mysqli_fetch_array($query)) {
                        ?>

                        <tr>
                            <td><?= $row['First_Name']." ".$row['Last_Name']; ?></td>
                            <td><?= $row['Institute_Name']; ?></td>
                            <td><?= $row['Email']; ?></td>
                            <td><a href="#" class="btn btn-sm"> Active </a></td>
                            <td>
                                <img src="../adImage/avatar.png" width="60">
                            </td>

                            <td>
                                <a href="st-view-details.php?a=<?= $row['S_Id']; ?>" title="View"><i class="fa fa-plus-square"></i></a> View
                            </td>
                        </tr>

                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="panel-footer">
            .
        </div>
    </div>
</div>

<?php
get_footer();
?>