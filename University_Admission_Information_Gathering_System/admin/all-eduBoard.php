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
            <a href="add-user.php" class="amar_btn"> <i class="fa fa-plus-square"></i> Add User</a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="panel-body">
        <table class="table table-striped table-responsive table-hover amar_table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Activity</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $data = "SELECT * FROM `exam_board`";
                $query = mysqli_query($connection, $data);
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?= $row['board_name']; ?></td>
                        <td>
                            <?php
                            if ($row['board_active'] == 1) {
                                echo '<a href="" id="act"> Active </a>';
                            } else {
                                echo '<a href="" id="act"> Dactive </a>';
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