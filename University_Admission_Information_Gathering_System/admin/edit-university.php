<?php
session_start();
require './function/adFunctions.php';

get_header();
get_sideber();
get_bread();
needLogged();
?>

<style>
    .btn{
        margin-top: 8px;
    }
</style>

<?php

$id = $_GET['e'];

$data = "SELECT * FROM uniwebsitelink  WHERE uni_id = $id";
$query = mysqli_query($connection, $data);
$row = mysqli_fetch_array($query);

if (isset($_POST['submit'])) {
    $uniName = $_POST['uniName'];
    $universitycategory = $_POST['universitycategory'];
    $link = $_POST['link'];
    $files = $_FILES['photo'];
    $fileName = 'user-' . time() . '-' . rand(10000, 100000) . '.' . pathinfo($files['name'], PATHINFO_EXTENSION);
    $insert = "UPDATE `uniwebsitelink` SET `university_name`='$uniName',`uniCat_id`='$universitycategory',"
            . "`link`='$link', `file`='$fileName' ";

    if (mysqli_query($connection, $insert)) {
        if ($fileName != '') {
            move_uploaded_file($files['tmp_name'], '../upload/' . $fileName);
        }
        echo "<script> alert('Data Updated'); </script>";
    } else {
        echo 'Data Update Faild';
    }
}
?>

<div class="panel panel-primary">
    <div class="panel-heading">Add University
    </div>
    <div class="panel-body">
        <form name="myform" method="post" action="" enctype="multipart/form-data">

            <div class="form-group col-md-12">
                <label> University Name </label>
                <input  name="uniName" class="form-control" type="text" value="<?= $row['university_name'] ?>" >
                <span id="error_name" class="text-danger"></span>
            </div>

            <div class="form-group col-md-12">
                <label for="universitycategory"> University Category </label>
                <select name="universitycategory" class="form-control">
                    <option selected="selected"> Select one </option>
                    <?php
                    $data = "SELECT * FROM universitycategory";

                    $query = mysqli_query($connection, $data);
                    while ($cat = mysqli_fetch_assoc($query)) {
                        ?>
                    <option value="<?= $cat['uniCat_id'] ?>" <?php if($row['uniCat_id']===$cat['uniCat_id']) echo 'selected="selected"'; ?>> <?= $cat['categoryName'] ?></option>
                        <?php
                    }
                    ?>
                </select>
                <span id="error_gender" class="text-danger"></span>
            </div>

            <div class="form-group col-md-12">
                <label for="link">Web Site link</label>
                <input name="link"  class="form-control" type="url" min="1" value="<?= $row['link'] ?>">
                <span id="error_age" class="text-danger"></span>
            </div>

            <div class="form-group col-md-6">
                <label for="file">Photo</label>
                <input id="file" name="photo" type="file" min="1" >
            </div>

            <div class="form-group col-md-6">
                <label for="file">Previous Photo</label>
                <img src="../upload/<?= $row['file']; ?>" width="100px">
            </div>

            <div class="btn">
                <button name="submit" type="submit" value="" class="btn btn-primary center">Submit</button>
            </div>
        </form>
    </div>
</div>
<?php
get_footer();
?>