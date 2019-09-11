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
            <strong> All User </strong>
        </div>
        <div class="col-sm-3">
            <a href="add-user.php" class="amar_btn"> <i class="fa fa-plus-square"></i> Add User</a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="panel-body">
        <table class="table table-striped table-responsive table-hover amar_table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Username</th>
                    <th>Roll</th>
                    <th>Status</th>
                    <th>Photo</th>
                    <th>Manage</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $data = "SELECT * FROM `admin` INNER JOIN adminroll ON admin.roll_id = adminroll.roll_id ORDER BY admin.roll_id";

                $query = mysqli_query($connection, $data);
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?= $row['name']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['phone']; ?></td>
                        <td><?= $row['username']; ?></td>
                        <td><?= $row['roll_name']; ?></td>
                        <td><a href="#" class="btn btn-sm"> Active </a></td>

                        <td>
                            <img src="upload/<?= $row['photo']; ?>" width="60">
                        </td>
                        <td>
                            <a href="view-user.php?v=<?= $row['adminId']; ?>" title="View"><i class="fa fa-plus-square"></i></a>
                            <a href="edit-user.php?e=<?= $row['adminId']; ?>" title="Edit"><i class="fa fa-pencil-square"></i></a>
                            <?php
                            if ($_SESSION['rollId'] <= 1) {
                                ?>
                                <a href="delete-user.php?d=<?= $row['adminId']; ?>" title="Delete"><i class="fa fa-trash"></i></a>
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