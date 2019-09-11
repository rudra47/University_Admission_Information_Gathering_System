<?php
session_start();
require_once './config/function.php';

get_header();
get_menuSmall();
get_navber();
get_CurrentNews();
stu_pro_sidebar();
needLogged();
?>

<span style="text-align: center;" ><h1> Welcome! <?= $_SESSION['stu_name'] ?> </h1></span>
<hr>

<?php
$id = $_SESSION['s_id'];

$stu_data = "select * from student_info where stu_id='$id'";
$stu_query = mysqli_query($connection, $stu_data);
$stu_row = mysqli_fetch_array($stu_query);

if ($stu_row['hsc_regno'] == 0 || $stu_row['hsc_year'] == 0) {
    ?>
    <div class="alert alert-info alert-dismissible" role="alert">
        <marquee><p style="font-family: Impact; font-size: 18pt">Please Update Your Profile!</p></marquee>
    </div>
    <?php
} else {
    ?>
    <div class="col-lg-12">
        <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>University Name</th>
                    <th>Units/Dep</th>
                    <th>Subject</th>
                    <th>Apply</th>
                </tr>
            </thead>
           
            <tbody>
                <?php
                $hsc_total_gpa = $stu_row['hsc_total_gpa'];
                $out_fourth_gpa = $stu_row['out_fourth_gpa'];
                $ssc_gpa = $stu_row['ssc_gpa'];
                $ssc_out_gpa = $stu_row['ssc_out_gpa'];
                $hsc_ssc_total = $stu_row['ssc_hsc_gpa'];
                $hsc_bangla = $stu_row['hsc_bangla'];
                $hsc_english = $stu_row['hsc_english'];

                $hsc_chem = $stu_row['hsc_chem'];
                $hsc_phy = $stu_row['hsc_phy'];
                $hsc_math = $stu_row['hsc_math'];
                $hsc_bio = $stu_row['hsc_bio'];
                $hsc_computer = $stu_row['hsc_computer'];

                $hsc_arts_etihas = $stu_row['hsc_his'];
                $hsc_arts_pouronity = $stu_row['hsc_pouroniti'];
                $hsc_arts_SoScience = $stu_row['hsc_SoScience'];
                $hsc_arts_sowork = $stu_row['hsc_SoWork'];
                $hsc_arts_economy = $stu_row['hsc_eco'];
                $hsc_arts_juktibidda = $stu_row['hsc_logic'];

                $com_bebosa = $stu_row['com_bebosa'];
                $com_accounting = $stu_row['com_accounting'];
                $com_finance = $stu_row['com_finance'];
                $com_production = $stu_row['com_production'];
                $com_islam = $stu_row['com_islam'];

                $hsc_ict = $stu_row['hsc_ict'];
                $hsc_year = $stu_row['hsc_year'];
                $ssc_year = $stu_row['ssc_year'];
                if ($_SESSION['group_id'] == 1) {
                    if ($hsc_bio) {
                        $req_data = "select * from science_requirement NATURAL JOIN uniwebsitelink where hsc_result<='$hsc_total_gpa'"
                                . "AND hsc_out_res<='$out_fourth_gpa' AND ssc_res<='$ssc_gpa' AND ssc_out_res<='$ssc_out_gpa'"
                                . "AND hsc_ssc_total<='$hsc_ssc_total' AND ssc_year<='$ssc_year' AND hsc_year<='$hsc_year'"
                                . "AND hsc_bangla<='$hsc_bangla' AND hsc_english<='$hsc_english' AND hsc_ict<='$hsc_ict' "
                                . "AND hsc_chemistry<='$hsc_chem' AND hsc_physics<='$hsc_phy' AND hsc_math<='$hsc_math' "
                                . "AND hsc_biology<='$hsc_bio' ";
                        $req_query = mysqli_query($connection, $req_data);

                        while ($req_row = mysqli_fetch_array($req_query)) {
                            ?>
                            <tr>
                                <td><?= $req_row['university_name']; ?></td>
                                <td><?= $req_row['unit_name']; ?></td>
                                <td><?= $req_row['unit_subject']; ?></td>
                                <td><a href="">Apply now</a></td>
                            </tr>
                            <?php
                        }
                    } elseif ($hsc_computer) {
                        $req_data = "select * from science_requirement NATURAL JOIN uniwebsitelink where hsc_result<='$hsc_total_gpa'"
                                . "AND hsc_out_res<='$out_fourth_gpa' AND ssc_res<='$ssc_gpa' AND ssc_out_res<='$ssc_out_gpa'"
                                . "AND hsc_ssc_total<='$hsc_ssc_total' AND ssc_year<='$ssc_year' AND hsc_year<='$hsc_year'"
                                . "AND hsc_bangla<='$hsc_bangla' AND hsc_english<='$hsc_english' AND hsc_ict<='$hsc_ict' "
                                . "AND hsc_chemistry<='$hsc_chem' AND hsc_physics<='$hsc_phy' AND hsc_math<='$hsc_math' "
                                . " AND hsc_comp<='$hsc_computer' ";
                        $req_query = mysqli_query($connection, $req_data);

                        while ($req_row = mysqli_fetch_array($req_query)) {
                            ?>
                            <tr>
                                <td><?= $req_row['university_name']; ?></td>
                                <td><?= $req_row['unit_name']; ?></td>
                                <td><?= $req_row['unit_subject']; ?></td>
                                <td><a href="">Apply now</a></td>
                            </tr>
                <?php
            }
        }
    } 
    
    elseif ($_SESSION['group_id'] == 2) {
        if ($hsc_arts_economy) {
            $req_data = "select * from arts_requirments NATURAL JOIN uniwebsitelink WHERE hsc_result<='$hsc_total_gpa'"
                    . "AND hsc_out_res<='$out_fourth_gpa' AND ssc_res<='$ssc_gpa' AND ssc_out_res<='$ssc_out_gpa'"
                    . "AND hsc_ssc_total<='$hsc_ssc_total' AND ssc_year<='$ssc_year' AND hsc_year<='$hsc_year'"
                    . "AND hsc_bangla<='$hsc_bangla' AND hsc_english<='$hsc_english' AND hsc_ict<='$hsc_ict' "
                    . "AND hsc_arts_etihas<='$hsc_arts_etihas' AND hsc_arts_pouronity<='$hsc_arts_pouronity' "
                    . "AND hsc_arts_SoScience<='$hsc_arts_SoScience' AND hsc_arts_sowork<='$hsc_arts_sowork' "
                    . "AND hsc_arts_economy<='$hsc_arts_economy' ";
            $req_query = mysqli_query($connection, $req_data);


            while ($req_row = mysqli_fetch_array($req_query)) {
                ?>
                            <tr>
                                <td><?= $req_row['university_name']; ?></td>
                                <td><?= $req_row['unit_name']; ?></td>
                                <td><a href="">Apply now</a></td>
                            </tr>
                <?php
            }
        }elseif ($hsc_arts_juktibidda) {
            $req_data = "select * from arts_requirments NATURAL JOIN uniwebsitelink WHERE hsc_result<='$hsc_total_gpa'"
                    . "AND hsc_out_res<='$out_fourth_gpa' AND ssc_res<='$ssc_gpa' AND ssc_out_res<='$ssc_out_gpa'"
                    . "AND hsc_ssc_total<='$hsc_ssc_total' AND ssc_year<='$ssc_year' AND hsc_year<='$hsc_year'"
                    . "AND hsc_bangla<='$hsc_bangla' AND hsc_english<='$hsc_english' AND hsc_ict<='$hsc_ict' "
                    . "AND hsc_arts_etihas<='$hsc_arts_etihas' AND hsc_arts_pouronity<='$hsc_arts_pouronity' "
                    . "AND hsc_arts_SoScience<='$hsc_arts_SoScience' AND hsc_arts_sowork<='$hsc_arts_sowork' "
                    . " AND hsc_arts_juktibidda<='$hsc_arts_juktibidda' ";
            $req_query = mysqli_query($connection, $req_data);


            while ($req_row = mysqli_fetch_array($req_query)) {
                ?>
                            <tr>
                                <td><?= $req_row['university_name']; ?></td>
                                <td><?= $req_row['unit_name']; ?></td>
                                <td><a href="">Apply now</a></td>
                            </tr>
                <?php
            }
        }
    } 
    
    elseif ($_SESSION['group_id'] == 3) {
        $req_data = "SELECT * FROM `comm_requirements` NATURAL JOIN `uniwebsitelink` WHERE `hsc_res`<='$hsc_total_gpa'
                            AND `hsc_out_res`<='$out_fourth_gpa' AND `ssc_res`<='$ssc_gpa' AND `ssc_out_res`<='$ssc_out_gpa'
                            AND `ssc_hsc_total_res`<='$hsc_ssc_total' AND `ssc_year`<='$ssc_year' AND `hsc_year`<='$hsc_year'
                            AND `hsc_bangla`<='$hsc_bangla' AND `hsc_english`<='$hsc_english' AND `hsc_ict`<='$hsc_ict' 
                            AND `hsc_buss_bebosthapona`<='$com_bebosa' AND `hsc_buss_accounting`<='$com_accounting' 
                            AND `hsc_buss_finance`<='$com_finance' AND `hsc_buss_biponon`<='$com_production' 
                            AND `hsc_buss_islam`<='$com_islam' ";
        $req_query = mysqli_query($connection, $req_data);
        while ($req_row = mysqli_fetch_array($req_query)) {
            ?>
                        <tr>
                            <td><?= $req_row['university_name']; ?></td>
                            <td><?= $req_row['unit_name']; ?></td>
                            <td><a href="">Apply now</a></td>
                        </tr>
            <?php
        }
    }
}
?>
        </tbody>
    </table>
</div>

<?php
profile_footer();
get_footer();
?>
