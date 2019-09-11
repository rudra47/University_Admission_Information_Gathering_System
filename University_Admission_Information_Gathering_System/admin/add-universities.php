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
if (isset($_POST['submit'])) {
    $uniName = $_POST['uniName'];
    $universitycategory = $_POST['universitycategory'];
    $link = $_POST['link'];
    $files = $_FILES['photo'];
    $fileName = 'user-' . time() . '-' . rand(10000, 100000) . '.' . pathinfo($files['name'], PATHINFO_EXTENSION);
    $insert = "INSERT INTO `university`(`un_name`, `uniCat_id`, `university_name`, `un_photo`) VALUES "
            . "('$uniName','$universitycategory','$link','$fileName')";

    if (mysqli_query($connection, $insert)) {
        if ($fileName != '') {
            move_uploaded_file($files['tmp_name'], '../upload/' . $fileName);
        }
        echo "<script> alert('Registration Complete'); </script>";
    } else {
        echo 'registration faild';
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
                <input  name="uniName" class="form-control" type="text" data-validation="required">
                <span id="error_name" class="text-danger"></span>
            </div>

            <div class="form-group col-md-12">
                <label for="universitycategory"> University Category </label>
                <input name="universitycategory" class="form-control" type="text" data-validation="required">
                <span id="error_gender" class="text-danger"></span>
            </div>

            <div class="form-group col-md-12">
                <label for="link">Web Site link</label>
                <input name="link"  class="form-control" type="url" min="1" >
                <span id="error_age" class="text-danger"></span>
            </div>

            <div class="form-group col-md-12">
                <label for="file">Photo</label>
                <input id="file" name="photo" type="file" min="1" >
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