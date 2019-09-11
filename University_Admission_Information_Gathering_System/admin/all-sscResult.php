<?php
session_start();
require_once './function/adFunctions.php';

get_header();
get_sideber();
get_bread();
needLogged();
?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="col-sm-9">
            <strong> All Result </strong>
        </div>
        <div class="col-sm-3">
            <a href="add-ssc-Result.php" class="amar_btn"> <i class="fa fa-plus-square"></i> Add SSC Result</a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="panel-body">
        <table class="table table-striped table-responsive table-hover amar_table">
            <thead>
                <tr>
                    <th> Name </th>
                    <th> Reg No </th>
                    <th> Roll No </th>
                    <th> Board Name </th>
                    <th> Group Name </th>
                    <th> Total GPA </th>
                    <th> Manage </th>
                </tr>
            </thead>
            <tbody>

                <?php
                $data = "SELECT * FROM `user_ssc_result` NATURAL JOIN `exam_board` NATURAL JOIN `student_group` ";
                $query = mysqli_query($connection, $data);
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?= $row['user_name']; ?></td>
                        <td><?= $row['registration_no']; ?></td>
                        <td><?= $row['ssc_roll']; ?></td>
                        <td><?= $row['board_name']; ?></td>
                        <td><?= $row['group_name']; ?></td>
                        <td><?= $row['ssc_totalgpa']; ?></td>
                        <td>
                            <a href="view-sscResult.php?v=<?= $row['ssc_id']; ?>" title="View"><i class="fa fa-plus-square"></i></a>
                            <a href="edit-notice.php?e=<?= $row['ssc_id']; ?>" title="Edit"><i class="fa fa-pencil-square"></i></a>
                            <?php
                            if ($_SESSION['rollId'] <= 1) {
                                ?>
                                <a href="delete-message.php?d=<?= $row['ssc_id']; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                                <?php
                            }
                            ?>
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

<?php
get_footer();
?>