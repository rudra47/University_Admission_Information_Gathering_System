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
            <strong> All User </strong>
        </div>
        <div class="col-sm-3">
            <a href="add-hsc-Result.php" class="amar_btn"> <i class="fa fa-plus-square"></i> Add HSC Result</a>
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
                $data = "SELECT * FROM `user_hsc_result` NATURAL JOIN `exam_board` NATURAL JOIN `student_group` ";
                $query = mysqli_query($connection, $data);
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?= $row['user_name']; ?></td>
                        <td><?= $row['hsc_regId']; ?></td>
                        <td><?= $row['hsc_roll']; ?></td>
                        <td><?= $row['board_name']; ?></td>
                        <td><?= $row['group_name']; ?></td>
                        <td><?= $row['total_gpa']; ?></td>
                        <td>
                            <a href="view-hscResult.php?v=<?= $row['hsc_id']; ?>" title="View"><i class="fa fa-plus-square"></i></a>
                            <a href="edit-notice.php?e=<?= $row['hsc_id']; ?>" title="Edit"><i class="fa fa-pencil-square"></i></a>
                            <?php
                            if ($_SESSION['rollId'] <= 1) {
                                ?>
                                <a href="delete-message.php?d=<?= $row['hsc_id']; ?>" title="Delete"><i class="fa fa-trash"></i></a>
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