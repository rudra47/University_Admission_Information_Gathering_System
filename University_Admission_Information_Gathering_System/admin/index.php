<?php
session_start();
require_once './function/adFunctions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/adStyle.css"/>
    </head>

    <?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $data = "SELECT * FROM `admin` INNER JOIN `adminroll` ON admin.roll_id = adminroll.roll_id "
                . "WHERE `username` = '$username' AND `password` = '$password' ";
        $quary = mysqli_query($connection, $data);

        $row = mysqli_fetch_array($quary);
        if ($row) {
            $_SESSION['name'] = $row['name'];
            $_SESSION['adminId'] = $row['adminId'];
            $_SESSION['rollId'] = $row['roll_id'];
            $_SESSION['rollName'] = $row['roll_name'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['userPhoto'] = $row['photo'];
            ?>
            <script> window.location.assign("home.php")</script>
            <?php
        } else {
            echo 'username and password is not match';
        }
    }
    ?>

    <body>
        <section id="login">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 "  >
                        <div class="form-wrap">
                            <h1 align="center">Log in with your Username</h1>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="email" class="sr-only">User Name</label>
                                    <input type="text" name="username" class="form-control" placeholder="username">
                                </div>

                                <div class="form-group">
                                    <label for="key" class="sr-only">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>

                                <input type="submit" name="submit" class="btn btn-custom btn-lg btn-block" value="Log in">
                            </form>
                            <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a>
                            <hr>
                        </div>
                    </div> <!-- /.col-xs-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </section>

        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <p>Page © - 2017</p>
                      
                    </div>
                </div>
            </div>
        </footer>

    </body>
</html>