<?php session_start();
require_once './config/function.php';

get_header();
get_navber();
get_menuSmall();
get_CurrentNews();
?>

<div class="col-lg-8 col-md-8 col-lg-offset-2 universities_Subject" style=" ">
    <div class="col-lg-12 col-md-12" style=" padding-bottom: 10px;">

        <h3 align="center"> Check Universities Requirements </h3>

    </div>


    <div class=" select_Uni col-lg-4 col-md-4 col-lg-offset-1">

        <div class="container">
            <form action="" method=" post">
                <div class="form-group">
                    <label for="sel1"> Select University </label>
                    <select name="university" id="university" class="form-control" onchange="change_university()" style=" width: 40%;">
                        <option id="">Select</option>

                        <?php
                        
                        $query = "SELECT * FROM universities";
                        $result = mysqli_query($connection, $query);
                        while ($row = mysqli_fetch_array($result)) {

                            echo '<option value= " ' . $row["id"] . ' "> ' . $row["name"] . '</option>';
                        }
                        ?>

                    </select>
                    <br>

                    <label for="sel1">Select Unit: </label>
                    <select id="unit" name="unit" class="form-control "  style=" width: 40%"onchange = "change_unit()">
                        <option value="1">Select One</option>
                    </select>

                    <br />

                    <label for="sel1">Select Subject: </label>
                    <select id="subjects" class="form-control" style=" width: 40%">
                        <option value="">Select One</option>
                    </select>

                    <input type="submit" name="submit" value="Submit">

                    <br/>

                </div>
            </form>


            <script type="text/javascript">

                function change_university() {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.open("get", "ajax.php?university=" + document.getElementById("university").value, false);
                    xmlhttp.send(null);
                    document.getElementById("unit").innerHTML = xmlhttp.responseText;
                }

                function change_unit() {

                    alert(document.getElementById("unit").value);
//                                var xmlhttp = new XMLHttpRequest();
//                                xmlhttp.open("get", "ajax.php?unit=" + document.getElementById("unit").value, false);
//                                xmlhttp.send(null); 
//                                alert(xmlhttp.responseText);
//                                document.getElementById("subjects").innerHTML = xmlhttp.responseText;
                }

            </script>

        </div>

    </div>



</div>

<?php
get_footer();
?>