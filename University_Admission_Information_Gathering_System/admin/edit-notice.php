<?php
session_start();
require_once './function/adFunctions.php';

get_header();
get_sideber();
get_bread();
needLogged();
?>

<?php
$id = $_GET['e'];

$data = "SELECT * FROM notice_board WHERE not_id = $id";
$query = mysqli_query($connection, $data);
$row = mysqli_fetch_array($query);

if (isset($_POST['submit'])) {
    $uni_id = $_POST['uni_name'];
    $not_headline = $_POST['not_headline'];
    $not_description = $_POST['not_description'];
    $not_file = $_FILES['not_file'];
    $file_name = 'file-' . time() . '-' . md5(rand(10000, 1000000)) . '.' . pathinfo($not_file['name'], PATHINFO_EXTENSION);

    $data = "UPDATE `notice_board` SET `uni_id`='$uni_id',`not_notice`='$not_headline',"
            . "`not_description`='$not_description', `not_path`='$file_name' WHERE `not_id`='$id'";
    if (mysqli_query($connection, $data)) {
        if ($file_name != '') {
            move_uploaded_file($not_file['tmp_name'], '../upload/' . $file_name);
            echo "<script> alert('Data Update') </script>";
            header('Location: all-notice.php');
        }
    } else {
        echo "<script> alert('Insertion Faild')</script>";
    }
}
?>

<div class="panel panel-primary">
    <div class="panel-heading">Add User
    </div>
    <div class="panel-body">
        <form name="myform" method="post" action="" enctype="multipart/form-data">
            <div class="form-group col-md-12">
                <label> University *</label>
                <select name="uni_name" id="roll" class="form-control">
                    <option selected>Select One</option>
                    <?php
                    $query = "SELECT * FROM uniwebsitelink";
                    $data = mysqli_query($connection, $query);
                    while ($name = mysqli_fetch_array($data)) {
                        ?>
                        <option value="<?= $name['uni_id']; ?>" <?php if ($row['uni_id'] === $name['uni_id']) echo 'selected="selected"'; ?>> <?= $name['university_name']; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>

            <div class = "form-group col-md-12">
                <label for = "myName">Headline </label>
                <input id = "myName" value="<?= $row['not_notice'] ?>" name = "not_headline" class = "form-control" type = "text" data-validation = "required">
                <span id = "error_name" class = "text-danger"></span>
            </div>

            <div class = "form-group col-md-12">
                <label for = "disc"> Description </label>
                <textarea name = "not_description" class = "form-control" rows = "3"><?= $row['not_notice'] ?> </textarea>
            </div>

            <div class = "form-group col-md-11">
                <label for = "phone"> Upload File </label>
                <input type = "file" name = "not_file" value="<?= $row['not_file'] ?>" class = "" >
                <span id = "error_phone" class = "text-danger"></span>
            </div>

            <div class = "form-group col-md-3">
                <button id = "submit" type = "submit" value = "submit" name="submit" class = "btn btn-primary center">Submit</button>
            </div>
        </form>
    </div>
</div>


<?php
get_footer();
?>