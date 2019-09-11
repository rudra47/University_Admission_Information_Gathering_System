<?php session_start();
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
            <a href="add-user.php" class="amar_btn"> <i class="fa fa-plus-square"></i> Add Student</a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="panel-body" >
        <div class="btn btn-warning col-md-4">
            <a href="all-eduBoard.php" style="color: black;"> Education Board </a>
        </div>
        <div class="btn btn-custom col-md-4">
            <a href="all-sscResult.php" style="color: black;"> SSC Result </a>
        </div>
        <div class=" btn btn-info col-md-4">
            <a href="all-hscResult.php" style="color: black"> HSC Result </a>
        </div>
    </div>
    
    <div class="panel-footer">
    
    </div>
</div>

<?php
get_footer();
?>