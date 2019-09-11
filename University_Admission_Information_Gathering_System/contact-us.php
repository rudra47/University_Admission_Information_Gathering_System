<?php session_start(); ?>

<?php
require_once './config/function.php';

get_header();
get_navber();
get_menuSmall();
?>
<div class=" col-lg-12">
    <section id="contact">
        <div class="col-md-7 col-md-offset-1" style="  ">
            <h2 align="center"> Contact with us </h2>
            <p align="center"> Send a massage via the form below </p>
            <?php
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $massage = $_POST['massege'];

                $query = "INSERT INTO contuct_us (conus_name, conus_email, conus_massage) "
                        . "VALUES ('$name','$email', '$massage')";
                $insert = mysqli_query($connection, $query);
                if ($insert) {
                    ?>
                    <div class="alert alert-info">
                        Message Send <a href="#" class="alert-link">Successfully</a>.
                    </div>
                    <?php
                }
            }
            ?>
            <form method="post" role="form">
                <div class="from-group">
                    <input type="text" name="name" class=" form-control" placeholder="Your Name">
                </div>
                <div class="from-group">
                    <input type="email" name="email" class=" form-control" placeholder="Your Email">
                </div>
                <div class="from-group">
                    <textarea name="massege" rows="5" class=" form-control" placeholder="message...."> </textarea>
                </div>

                <div class=" checkbox">
                    <label>
                        <input type="checkbox" name="check"> I am human
                    </label>
                </div>

                <div class="" align="center">
                    <input type="submit" class=" btn btn-default" name="submit" value="Submit">
                </div>
            </form>

        </div>
    </section>

    <section id="shoutbox">
        <div align="right" class="box col-md-offset-2 col-md-2" style=" border: 1px solid gray;" >
            <h2 align="center"> Chat each other </h2>
            <iframe WIDTH="300" HEIGHT="400" title="Shoutbox" src="https://shoutbox.widget.me/start.html?uid=65fevy92" frameborder="0" scrolling="auto">
            </iframe>
            <script src="https://shoutbox.widget.me/v1.js" type="text/javascript"></script><br>
        </div>

    </section>

</div>

<?php get_footer(); ?>