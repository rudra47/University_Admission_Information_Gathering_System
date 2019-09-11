<?php

require '../config/adFunctions.php';

get_header();
get_sideber();
get_bread();
needLogged();
?>

<style>
    .btn{
        display: flex;
        justify-content: right;
    }
</style>

<div class="panel panel-primary">
    <div class="panel-heading">Add Units
    </div>
    <div class="panel-body">
        <form>
            <div class="form-group col-md-6">
                <label for="gender"> Universities </label>
                <select name="roll" id="roll" class="form-control">
                    <option selected>Select One</option>
                    <option> Dhaka University</option>
                    <option> Jahangir-nagar university </option>
                    <option> Jagannath University </option>
                    <option> Rajshahi University </option>
                </select>
                <span id="error_gender" class="text-danger"></span>
            </div>

            <div class="form-group col-md-6">
                <label for="gender"> Units </label>
                <select name="roll" id="roll" class="form-control">
                    <option selected>Select One</option>
                    <option> A </option>
                    <option> B </option>
                    <option> C </option>
                    <option> D </option>
                    <option> E </option>
                    <option> F </option>
                    <option> G </option>
                    <option> H </option>
                </select>
                <span id="error_gender" class="text-danger"></span>
            </div>

            <div class="btn">
                <input name="submit" type="submit" value="Submit" class="btn btn-primary center">
            </div>
        </form>
    </div>
</div>

<?php

get_footer();
?>