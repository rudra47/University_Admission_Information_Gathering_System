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
            <strong>All Message</strong>
        </div>
        
        <div class="clearfix"></div>
    </div>

    <div class="panel-body">
        <table class="table table-striped table-responsive table-hover amar_table">
            <thead>
                <tr>
                    <th>Soul Name</th>
                    <th>Soul Email</th>
                    <th>Soul Message</th>
                    <th>Manage</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = "SELECT * FROM `contuct_us`";
                $query = mysqli_query($connection, $data);
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?= $row['conus_name']; ?></td>
                        <td><?= $row['conus_email']; ?></td>
                        <td><?= $row['conus_massage']; ?></td>
                        <td>
                            <a href="view-message.php?v=<?= $row['conus_id']; ?>" title="View"><i class="fa fa-plus-square"></i></a>
                            <?php
                            if ($_SESSION['rollId'] <= 1) {
                                ?>
                            <a href="delete-message.php?d=<?= $row['conus_id']; ?>" title="Delete"><i class="fa fa-trash"></i></a>
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