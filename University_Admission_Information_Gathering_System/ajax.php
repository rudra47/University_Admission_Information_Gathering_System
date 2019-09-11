<?php

require ('config.php');
include_once 'config/function.php';

if (isset($_GET['university'])) {

    $university = $_GET["university"];

    if ($university != "") {

        $resu = mysqli_query($connection, "select * from unit where university_Id = $university");

        echo '<select id="unit" onchange = "change_unit()">';

        while ($row = mysqli_fetch_array($resu)) {

            echo '<option value= "' . $row["unit_id "] . '">' . $row["unit"] . '</option>';
        }

        echo "</select>";
        
    }
}

//
//if (isset($_GET["unit"])) {
//    $unit = $_GET["unit"];
//
//    if ($unit != "") {
//
//        $unit_res = mysqli_query($connection, "select * from subject where unit_id = $unit");
//
//        echo "<select id='subjects' onchange='change_subject()'>";
//
//        while ($row = mysqli_fetch_array($unit_res)) {
//
//            echo '<option value= " ' . $row["subject_id"] . ' "> ' . $row[" subjects "] . '</option>';
//        }
//
//        echo "</select>";
//    }
//} else {
//    echo ' ';
//}


//For Update

if (isset($_GET['hsc_group'])) {

    $hsc_group = $_GET["hsc_group"];

    if ($hsc_group != "") {

        $resu = mysqli_query($connection, "select * from hsc_subjects where group_id = $hsc_group");

        echo "<select id='subject1' onchange = 'change_subject1()'>";
        echo '<option value="Group">Select Subject</option>';

        while ($row = mysqli_fetch_array($resu)) {

            echo '<option value= "' . $row["sub_id"] . '">' . $row["Subjects"] . '</option>';
        }

        echo "</select>";
        
    }
}







?>
