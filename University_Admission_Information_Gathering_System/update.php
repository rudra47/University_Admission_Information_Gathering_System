<?php session_start();
require_once './config/function.php';

get_header();
get_menuSmall();
get_navber();
get_CurrentNews();
stu_pro_sidebar();
?> 
<style>
    .well-block {
        background-color: #fff;
        border: 1px solid #e9e6e8;
        padding: 40px;
    }
    .well-title {
        margin-bottom: 40px;
    }
</style>

<?php
//if (isset($_POST['update'])) {
//    $year = $_POST['year'];
//    $board = $_POST['board'];
//    $HSc_group = $_POST['HSC_group'];
//    $subject1 = $_POST['subject1'];
//    $grade1 = $_POST['grade1'];
//    $subject2 = $_POST['subject2'];
//    $grade2 = $_POST['grade2'];
//    $subject3 = $_POST['subject3'];
//    $grade3 = $_POST['grade3'];
//    $subject4 = $_POST['subject4'];
//    $grade4 = $_POST['grade4'];
//    $subject5 = $_POST['subject5'];
//    $grade5 = $_POST['grade5'];
//    $subject6 = $_POST['subject6'];
//    $grade6 = $_POST['grade6'];
//    $subject7 = $_POST['subject7'];
//    $grade7 = $_POST['grade7'];
//}
?>


<div class="col-md-12">
    <div class="col-lg-offset-4">
        <h2> Update Your Profile </h2>
    </div>

    <!--modal's form-->
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-offset-1">
                <div class="well-block">
                    <form>
                        <!-- Form start -->
                        <div class="row">
                            <!--year-->
                            <?php
//                                    $query = "SELECT * FROM universities";
//                                    $result = mysqli_query($connection, $query);
//                                    while ($row = mysqli_fetch_array($result)) {
//                                        echo '<option value= " ' . $row["id"] . ' "> ' . $row["name"] . '</option>';
//                                    }
                            ?>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="appointmentfor">Year</label>
                                    <select id="appointmentfor" name="year" class="form-control">
                                        <option value="Service#1">select year</option>
                                        <?php
                                        for ($i = 2017; $i > 2014; $i--) {
                                            echo '<option value="Service#1">' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <!-- Board -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="group"> Board </label>
                                    <select id="board" name="board" class="form-control">
                                        <option value="Group">Select Board</option>

                                        <?php
                                        $query = "SELECT * FROM boards";
                                        $result = mysqli_query($connection, $query);

                                        while ($row = mysqli_fetch_array($result)) {
                                            echo '<option value= " ' . $row["Board_id"] . ' "> ' . $row["Boards"] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <!-- Subject's -->
                            <div class="form-group col-md-6">
                                <label for="hsc_bangla">Physics *</label>
                                <input type="text" name="ssc_phy" id="datepicker" class="form-control" placeholder="Choose">
                            </div>

                            <!-- Button -->
                            <div class="col-md-12 col-md-offset-4">
                                <div class="form-group">
                                    <button id="singlebutton" name="update" class="btn btn-default"> Update </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
profile_footer();
get_footer();
?>