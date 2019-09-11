<?php session_start();
require './function/adFunctions.php';

get_header();
get_sideber();
get_bread();
needLogged();
?>

<div class="panel panel-primary">
    <div class="panel-heading">Add User
    </div>
    <div class="panel-body">
        <form name="" method="post" action="">
            <div class="form-group col-md-4">
                <label for="myName">Update Banner</label>
                <input name="banner"  type="file" data-validation="required">
                <span id="error_name" class="text-danger"></span>


                <div class="form-group col-md-1" style=" padding: 10px 0; ">
                    <button id="submit" type="submit" value="submit" name="submit" class="btn btn-primary center">Submit</button>
                </div>
            </div>

            <div class="form-group col-md-8" style="border: 1px solid gray">

                <h4>Your Previous Banner</h4><br>
                <div class="col-md-7">
                    <div class=" col-md-12" style=" padding: 15px;">
                        <img src="images/banner.jfif" width="">
                    </div>
                </div>

            </div>


        </form>
    </div>
</div>


<?php
get_footer();
?>