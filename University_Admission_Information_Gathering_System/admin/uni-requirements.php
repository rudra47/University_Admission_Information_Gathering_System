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
            <a href="science-requirements.php" style="color: black;"> Add Science Requirements </a>
        </div>
        <div class="btn btn-custom col-md-4">
            <a href="arts-requirements.php" style="color: black;"> Add Arts Requirements </a>
        </div>
        <div class=" btn btn-info col-md-4">
            <a href="comm-requirements.php" style="color: black"> Add Commerce Requirements </a>
        </div>
    </div>
    
    <div class="panel-footer">
    
    </div>
</div>

<?php
get_footer();
?>