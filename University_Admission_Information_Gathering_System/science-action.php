<?php 
require_once './config/function.php';
get_header();
get_menuSmall();
get_navber();
if (isset($_POST['submit'])) {
    $hsc_total_gpa = $_POST['hsc_res'];
    $hsc_out_res = $_POST['hsc_out_res'];
    $hsc_year = $_POST['hsc_year'];
    $ssc_gpa = $_POST['ssc_res'];
    $ssc_out_gpa = $_POST['ssc_out_res'];
    $ssc_year = $_POST['ssc_year'];
    $hsc_ssc_total = $_POST['ssc_hsc_res'];
   /* $ssc_hsc_out_res = $_POST['ssc_hsc_out_res'];*/
    $hsc_bangla = $_POST['hsc_bangla'];
    $hsc_english = $_POST['hsc_english'];
    $hsc_chem = $_POST['hsc_chem'];
    $hsc_phy = $_POST['hsc_phy'];
    $hsc_math = $_POST['hsc_math'];
    $hsc_bio = $_POST['hsc_bio'];
    $hsc_ict = $_POST['hsc_ict'];
   
    $req_data = "SELECT * FROM science_requirement NATURAL JOIN uniwebsitelink WHERE  hsc_result<= '$hsc_total_gpa'"
                            . "AND hsc_out_res<= '$hsc_out_res' AND hsc_year<= '$hsc_year' AND ssc_res<= '$ssc_gpa' AND ssc_out_res<= '$ssc_out_gpa'"
                            . "AND ssc_year<= '$ssc_year' AND hsc_ssc_total<= '$hsc_ssc_total'  "
                            . "AND hsc_bangla<= '$hsc_bangla' AND hsc_english<= '$hsc_english'  "
                            . "AND hsc_chemistry<='$hsc_chem' AND hsc_physics<= '$hsc_phy' AND hsc_math<= '$hsc_math' "
                            . "AND hsc_biology<= '$hsc_bio' AND hsc_ict<='$hsc_ict'";
              $req_query = mysqli_query($connection, $req_data);
}              
?>
                 <div class="container">
                <div class=" col-lg-10">
        <table id="example" class="table table-striped table-bordered table-hover" width="100%" cellspacing="0"style="margin-left: 100px">
            <thead>
                <tr>
                    <th>University Name</th>
                    <th>Units</th>
					 <th>Subject</th>
                    <th>Apply</th>
                </tr>
            </thead>
            <tfoot>
               
            </tfoot>
            <tbody>
                                        
                           <?php
                    while ( $req_row = mysqli_fetch_array($req_query)) {
                        ?>
                        <tr>
                            <td> <?= $req_row['university_name']; ?> </br></td>
                            <td> <?= $req_row['unit_name']; ?> </br></td>
							 <td> <?= $req_row['unit_subject']; ?> </br></td>
                            <td> <a href=" <?= $req_row['link']; ?>">Apply now</a> </br></td>
                        </tr>
                        
                        <?php
}
                  ?>
                                </table>
								</div>
							
<?php
profile_footer();
get_footer();
?>

                              
