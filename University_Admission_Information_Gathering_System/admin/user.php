<?php
require '../config/adFunctions.php';

get_header();
get_sideber();
get_bread();
needLogged();

?>


<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="glyphicon glyphicon-bookmark"></span> Manage System </h3>
    </div>
    
    <div class="panel-body">
        <div class="row">
            <div class="col-xs-6 col-md-6 col-lg-12">
                <a href="all-user.php" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-bookmark"></span> <br/>All User</a>
                <a href="add-user.php" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-bookmark"></span> <br/>Add User</a>
            </div>
        </div>
        <div style="padding: 30px 0;">
            
        </div>
    </div>
</div>

<?php
get_footer();
?>