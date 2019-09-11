<?php session_start();
require './function/adFunctions.php';

get_header();
get_sideber();
get_bread();
needLogged();
?>
<?php
$id = $_GET['e'];

$data = "SELECT * FROM admin WHERE adminId = $id";
$query = mysqli_query($connection, $data);
$row = mysqli_fetch_array($query);

if (isset($_POST['submit'])) {
    $adName = $_POST['name'];
    $adAge = $_POST['age'];
    $adDob = $_POST['dob'];
    $adGender = $_POST['gender'];
    $adEmail = $_POST['email'];
    $adPhone = $_POST['phone'];
    $adUsername = $_POST['username'];
    $adPassword = md5($_POST['password']);
    $adRePassword = md5($_POST['re_password']);
    $photo = $_FILES['photo'];
//    $imageName = 'user-'.time().'-'. md5(rand(10000, 100000)).'.'. pathinfo($image['name'],PATHINFO_EXTENSION);
    $imageName = 'user-' . time() . '-' . md5(rand(10000, 1000000)) . '.' . pathinfo($photo['name'], PATHINFO_EXTENSION);
    $adDescription = $_POST['description'];
    $adRoll = $_POST['roll'];
    if ($adPassword == $adRePassword) {
        $sel = "UPDATE `admin` SET `name`='$adName',`age`='$adAge',`dateOfBirth`='$adDob',`gender`='$adGender',"
                . "`email`='$adEmail',`phone`='$adPhone',`username`='$adUsername',`password`='$adPassword',"
                . " `photo`='$imageName',`discription`='$adDescription',`roll_id`='$adRoll'  WHERE adminId = $id";
        if(mysqli_query($connection, $sel)){
            if ($imageName != '') {
                move_uploaded_file($photo['tmp_name'], 'upload/'.$imageName);
                echo "<script> alert('Registration Complete') </script>";
                header('Location: all-user.php');
            }
        } else {
            echo "<script> alert('Update Failed')</script>";
        }
    }
}
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="col-sm-9">
            <strong> Edit User </strong>
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
                <input id="myName" name="name" class=" form-control" type="text" value="<?= $row['name'] ?>">
                <span id="error_name" class="text-danger"></span>
            </div>
            <div class="form-group col-md-6">
                <label for="age">Age *</label>
                <input id="age" name="age"  class="form-control" type="number" min="1" value="<?= $row['age'] ?>">
                <span id="error_age" class="text-danger"></span>
            </div>

            <div class="form-group col-md-6">
                <label for="dob">Date Of Birth *</label>
                <input type="text" name="dob" id="datepicker" class="form-control" placeholder="Choose"value="<?= $row['age'] ?>" >
                <span id="error_dob" class="text-danger"></span>
            </div>

            <div class="form-group col-md-6">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" value="<?= $row['age'] ?>">
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
                        <option value="<?= $roll['roll_id'] ?>" <?php if ($row['roll_id'] === $roll['roll_id']) echo 'selected="selected"' ?>>
                            <?= $roll['roll_name']; ?>
                        </option>
                        <?php
                    }
                    ?>

                </select>
                <span id="error_gender" class="text-danger"></span>
            </div>

            <div class="form-group col-md-12">
                <label for="phone">Email Address *</label>
                <input type="email" id="email" name="email" class="form-control" value="<?= $row['email']; ?>">
                <span id="error_phone" class="text-danger"></span>
            </div>

            <div class="form-group col-md-12">
                <label for="phone">Phone Number *</label>
                <input type="text" id="phone" name="phone" class="form-control" value="<?= $row['phone']; ?>">
                <span id="error_phone" class="text-danger"></span>
            </div>

            <div class="form-group col-md-12">
                <label for="username">Username *</label>
                <input type="text" id="username" name="username" class="form-control" value="<?= $row['username']; ?>">
                <span id="error_phone" class="text-danger"></span>
            </div>

            <div class="form-group col-md-6">
                <label for="password">Password *</label>
                <input type="password" id="password" name="password" class="form-control">
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
            
            <div class="form-group col-md-6">
                <label for="phone">Previous Photo</label>
                <img src="upload/<?= $row['photo']; ?>" width="200px">
                <span id="error_phone" class="text-danger"></span>
            </div>

            <div class="form-group col-md-12">
                <label for="disc">Description</label>
                <textarea name="description" class="form-control" rows="3"> <?= $row['discription']; ?> </textarea>
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