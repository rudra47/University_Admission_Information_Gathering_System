<?php session_start();
require_once './function/adFunctions.php';

get_header();
get_sideber();
get_bread();
needLogged();
?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="col-sm-9">
            <strong>Table Information</strong>
        </div>
        <div class="col-sm-3">
            <a href="add-notice.php" class="amar_btn"> <i class="fa fa-plus-square"></i> Add Notice</a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="panel-body">
        <table class="table table-striped table-responsive table-hover amar_table">
            <thead>
                <tr>
                    <th>University Name</th>
                    <th>Notice</th>
                    <th>Description</th>
                    <th>Manage</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $data = "SELECT * FROM `notice_board` NATURAL JOIN uniwebsitelink ORDER BY notice_board.not_id";

                $query = mysqli_query($connection, $data);
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?= $row['university_name']; ?></td>
                        <td><?= $row['not_notice']; ?></td>
                        <td><?= $row['not_description']; ?></td>
                        <td>
                            <a href="view-notice.php.?v=<?= $row['not_id']; ?>" title="View"><i class="fa fa-plus-square"></i></a>
                            <a href="edit-notice.php?e=<?= $row['not_id']; ?>" title="Edit"><i class="fa fa-pencil-square"></i></a>
                            <?php
                            if ($_SESSION['rollId'] <= 1) {
                                ?>
                                <a href="delete-notice.php?d=<?= $row['not_id']; ?>" title="Delete"><i class="fa fa-trash"></i></a>
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