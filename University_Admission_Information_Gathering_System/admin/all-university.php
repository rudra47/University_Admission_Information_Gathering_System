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
            <strong>Table Information</strong>
        </div>
        <div class="col-sm-3">
            <a href="add-universities.php" class="amar_btn"> <i class="fa fa-plus-square"></i> Add University</a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="panel-body">
        <table class="table table-striped table-responsive table-hover amar_table">
            <thead>
                <tr>
                    <th>University Name</th>
                    <th>Category </th>
                    <th>Web site link</th>
                    <th>Photo</th>
                    <th>Manage</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = "SELECT * FROM `uniwebsitelink` natural join universitycategory"
                        . " ORDER BY uniwebsitelink.uniCat_id";

                $query = mysqli_query($connection, $data);
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?= $row['university_name']; ?></td>
                        <td><?= $row['categoryName']; ?></td>
                        <td><?= $row['link']; ?></td>
                        <td>
                            <img src="../upload/<?= $row['file']; ?>" width="60">
                        </td>
                        <td>
                            <a href="view-university.php?v=<?= $row['uni_id']; ?>" title="View"><i class="fa fa-plus-square"></i></a>
                            <a href="edit-university.php?e=<?= $row['uni_id']; ?>" title="Edit"><i class="fa fa-pencil-square"></i></a>
                            <?php
                            if ($_SESSION['rollId'] <= 1) {
                                ?>
                                <a href="delete-university.php?d=<?= $row['uni_id']; ?>" title="Delete"><i class="fa fa-trash"></i></a>
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