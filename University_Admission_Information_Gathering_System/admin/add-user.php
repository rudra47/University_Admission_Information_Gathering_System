<?php
session_start();
require './function/adFunctions.php';

get_header();
get_sideber();
get_bread();
needLogged();
?>

<script>
    $(function () {
        $("#datepicker").datepicker({
            dateFormat: 'mm/dd/yy',
            changeMonth: true,
            changeYear: true,
            yearRange: '-100y:c+nn',
            maxDate: '-1d'
        });
    });
</script>

<?php
if (isset($_POST['submit'])) {
    $adName = $_POST['name'];
    $adAge = $_POST['age'];
    $adDob = $_POST['dob'];
    $adGender = $_POST['gender'];
    $adRoll = $_POST['roll'];
    $adEmail = $_POST['email'];
    $adPhone = $_POST['phone'];
    $adUsername = $_POST['username'];
    $adPassword = md5($_POST['password']);
    $adRePassword = md5($_POST['re_password']);
    $adDescription = $_POST['description'];
    $photo = $_FILES['photo'];
//    $imageName = 'user-'.time().'-'. md5(rand(10000, 100000)).'.'. pathinfo($image['name'],PATHINFO_EXTENSION);
    $imageName = 'user-' . time() . '-' . md5(rand(10000, 1000000)) . '.' . pathinfo($photo['name'], PATHINFO_EXTENSION);
    if ($adPassword == $adRePassword) {
        $data = "INSERT INTO `admin`(`name`, `age`, `dateOfBirth`, `gender`, `email`, `phone`, `username`, `password`, `photo`, `discription`, `roll_id`) "
                . "VALUES ('$adName','$adAge','$adDob','$adGender','$adEmail','$adPhone', '$adUsername', '$adPassword', '$imageName', '$adDescription','$adRoll')";
        if (mysqli_query($connection, $data)) {
            if ($imageName != '') {
                move_uploaded_file($photo['tmp_name'], 'upload/' . $imageName);
                echo "<script> alert('Registration Complete') </script>";
                header('Location: all-user.php');
            }
        } else {
            echo "<script> alert('Insertion Faild')</script>";
        }
    } else {
        echo 'Password and Re-password is not match';
    }
}
?>


<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="col-sm-9">
            <strong> Add User </strong>
        </div>
        <div class="col-sm-3">
            <a href="all-user.php" class="amar_btn"> <i class="fa fa-plus-square"></i> All User</a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="panel-body">
        <form name="myform" method="post" action="" enctype="multipart/form-data">
            <div class="form-group col-md-12">
                <label for="myName">Name *</label>
                <input id="myName" name="name" class="form-control" type="text" data-validation="required">
                <span id="error_name" class="text-danger"></span>
            </div>
            <div class="form-group col-md-6">
                <label for="age">Age *</label>
                <input id="age" name="age"  class="form-control" type="number" min="1" >
                <span id="error_age" class="text-danger"></span>
            </div>

            <div class="form-group col-md-6">
                <label for="dob">Date Of Birth *</label>
                <input type="text" name="dob" id="datepicker" class="form-control" placeholder="Choose">
                <span id="error_dob" class="text-danger"></span>
            </div>

            <div class="form-group col-md-6">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control">
                    <option selected>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
                <span id="error_gender" class="text-danger"></span>
            </div>

            <div class="form-group col-md-6">
                <label for="gender"> Roll *</label>
                <select name="roll" id="roll" class="form-control">
                    <option selected>Select One</option>
                    <?php
                    $select = "SELECT * FROM adminroll";
                    $query = mysqli_query($connection, $select);
                    while ($roll = mysqli_fetch_array($query)) {
                        ?>
                        <option value="<?= $roll['roll_id'] ?>"> <?= $roll['roll_name'] ?> </option>
                        <?php
                    }
                    ?>

                </select>
                <span id="error_gender" class="text-danger"></span>
            </div>

            <div class="form-group col-md-12">
                <label for="phone">Email Address *</label>
                <input type="email" id="email" name="email" class="form-control" >
                <span id="error_phone" class="text-danger"></span>
            </div>

            <div class="form-group col-md-12">
                <label for="phone">Phone Number *</label>
                <input type="text" id="phone" name="phone" class="form-control" >
                <span id="error_phone" class="text-danger"></span>
            </div>

            <div class="form-group col-md-12">
                <label for="username">Username *</label>
                <input type="text" id="username" name="username" class="form-control" >
                <span id="error_phone" class="text-danger"></span>
            </div>

            <div class="form-group col-md-6">
                <label for="password">Password *</label>
                <input type="password" id="password" name="password" class="form-control" >
                <span id="error_phone" class="text-danger"></span>
            </div>

            <div class="form-group col-md-6">
                <label for="password">Re-Password *</label>
                <input type="password" id="password" name="re_password" class="form-control" >
                <span id="error_phone" class="text-danger"></span>
            </div>

            <div class="form-group col-md-6">
                <label for="phone">Photo *</label>
                <input type="file" name="photo" class="form-control" >
                <span id="error_phone" class="text-danger"></span>
            </div>

            <div class="form-group col-md-12">
                <label for="disc">Description</label>
                <textarea name="description" class="form-control" rows="3"></textarea>
            </div>

            <div class="form-group col-md-3">
                <button id="submit" type="submit" value="submit" name="submit" class="btn btn-primary center">Submit</button>
            </div>

        </form>
    </div>
</div>

<?php
get_footer();
?>
        