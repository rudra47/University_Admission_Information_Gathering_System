<?php
session_start();
require_once './function/adFunctions.php';

get_header();
get_sideber();
get_bread();
needLogged();
?>

<style>
    .a{
        height: 100px;
        color: black;
    }
</style>

<div class="panel-body" >
    <div class="btn btn-warning col-md-3 a">
        <h4> Total University </h4>
        <?php
        $data = "SELECT COUNT(uni_id) AS total FROM uniwebsitelink ";
        $query = mysqli_query($connection, $data);
        $row = mysqli_fetch_array($query);
        $num_ttl=$row['total'];
        echo $num_ttl;
        ?>
    </div>
    <div class="btn btn-custom col-md-4 a" style="margin-left: 10px;">
        <h4> Total Science Requirement </h4>
        <?php
        $data = "SELECT COUNT(science_id) AS total FROM science_requirement";
        $query = mysqli_query($connection, $data);
        $row = mysqli_fetch_array($query);
        $num_ttl=$row['total'];
        echo $num_ttl;
        ?>
    </div>
    <div class=" btn btn-info col-md-3 a" style="margin-left: 10px;">
        <h4> Total Arts Requirement </h4>
        <?php
        $data = "SELECT COUNT(arts_id) AS total FROM arts_requirments";
        $query = mysqli_query($connection, $data);
        $row = mysqli_fetch_array($query);
        $num_ttl=$row['total'];
        echo $num_ttl;
        ?>
    </div>
    
    <div class=" btn btn-info col-md-3 a" style="margin-top: 10px;">
        <h4> Total User </h4>
        <?php
        $data = "SELECT COUNT(stu_id) AS total FROM student_info";
        $query = mysqli_query($connection, $data);
        $row = mysqli_fetch_array($query);
        $num_ttl=$row['total'];
        echo $num_ttl;
        ?>
    </div>
    
    <div class=" btn btn-success col-md-4 a" style="margin-top: 10px; margin-left: 10px;">
        <h4> Total Commerce Requirement </h4>
        <?php
        $data = "SELECT COUNT(comm_id) AS total FROM comm_requirements";
        $query = mysqli_query($connection, $data);
        $row = mysqli_fetch_array($query);
        $num_ttl=$row['total'];
        echo $num_ttl;
        ?>
    </div>
    
    <div class=" btn btn-primary col-md-3 a" style="margin-top: 10px; margin-left: 10px;">
        <h4> Total Notice </h4>
        <?php
        $data = "SELECT COUNT(not_id) AS total FROM notice_board";
        $query = mysqli_query($connection, $data);
        $row = mysqli_fetch_array($query);
        $num_ttl=$row['total'];
        echo $num_ttl;
        ?>
    </div>
</div>


<?php
get_footer();
?>