<?php session_start();
require_once './config/function.php';

get_header();
get_navber();
get_menuSmall();
get_CurrentNews();
?>

<div class="container ">
    <div class="row">
        <div class=" col-sm-12 col-xs-12 col-md-12 col-lg-12 col-lg-offset-0 topper" style=" margin-top: 50px; ">
            <div class=" col-lg-12 col-md-12" style=" background: #92deef;">
                <h2 align="center"> Important Links </h2>

                <h4 align="center"> Here you can find some university official web links </h4>
            </div>
            
            <!-------------Start Gallery-----------
            --------------------------------------->
            <style type="text/css">
                .pull {
                    background-color: #ddd;
                    float: left;
                    margin: 10px;
                    text-align: center;
                    padding-right:0;
                    padding-left:0;
                }
            </style>

            <div class="col-md-12" style="text-align: center; padding: 25px;">
                <button id="all" class="btn btn-default">All</button>
                <button id="university" class="btn btn-default">University</button>
                <button id="ST" class="btn btn-default">Science & Technology</button>
                <button id="engineering" class="btn btn-default">Engineering</button>
                <button id="agricultural" class="btn btn-default">Agricultural</button>
                <button id="islamic" class="btn btn-default">Islamic</button>
            </div>

            <div class="row">
                <?php
                $data = "SELECT * FROM uniwebsitelink INNER JOIN universitycategory ON uniwebsitelink.uniCat_id = universitycategory.uniCat_id "
                        . "ORDER BY universitycategory.uniCat_id DESC";
                $query = mysqli_query($connection, $data);
                $row = mysqli_fetch_assoc($query);
                ?>

                <!--engineering-->
                <?php
                while ($row = mysqli_fetch_assoc($query)) {
                    if ($row['uniCat_id'] == 1) {
                        ?>
                        <div class="engineeringSite col-md-2 pull">
                            <a href=""><img src="upload/<?= $row['file']; ?>" width="195" height="195"></a>
                            <h4> <?= $row['university_name'] ?> </h4>
                            <a href="<?= $row['link'] ?>" target="_new"> <input class="btn btn-default" type="button" value="Web Page"</a>
                            <?php
                            ?>
                        </div>
                        <?php
                    }
                    if ($row['uniCat_id'] == 2) {
                        ?>
                        <div class="universitySite col-md-2 pull">

                            <a href=""><img src="upload/<?= $row['file']; ?>" width="195" height="195"></a>
                            <h4> <?= $row['university_name'] ?> </h4>
                            <a href="<?= $row['link'] ?>" target="_new"> <input class="btn btn-default" type="button" value="Web Page"</a>
                        </div>
                        <?php
                    }
                    
//                                Science & Technology University
                    if ($row['uniCat_id'] == 3) {
                        ?>
                        <div class="STUni col-md-2 pull">
                            <a href=""><img src="upload/<?= $row['file']; ?>" width="195" height="195"></a>
                            <h4> <?= $row['university_name'] ?> </h4>
                            <a href="<?= $row['link'] ?>" target="_new"> <input class="btn btn-default" type="button" value="Web Page"</a>
                            <?php
                            ?>
                        </div>
                        <?php
                    }
                    
//                                agricultural
                    if ($row['uniCat_id'] == 4) {
                        ?>
                        <div class="agriculturalSite col-md-2 pull">
                            <a href=""><img src="upload/<?= $row['file']; ?>" width="195" height="195"></a>
                            <h4> <?= $row['university_name'] ?> </h4>
                            <a href="<?= $row['link'] ?>" target="_new"> <input class="btn btn-default" type="button" value="Web Page"</a>
                            <?php
                            ?>
                        </div>
                        <?php
                    }

//                                Islamic
                    if ($row['uniCat_id'] == 5) {
                        ?>
                        <div class="islamicSite col-md-2 pull">
                            <a href=""><img src="upload/<?= $row['file']; ?>" width="195" height="195"></a>
                            <h5> <?= $row['university_name'] ?> </h5>
                            <a href="<?= $row['link'] ?>" target="_new"> <input class="btn btn-default" type="button" value="Web Page"</a>
                            <?php
                            ?>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>	
            <script type="text/javascript">
                $(document).ready(function () {
                    $("#islamic").mouseenter(function () {
                        $(".universitySite").hide(500);
                        $(".engineeringSite").hide(500);
                        $(".STUni").hide(500);
                        $(".agriculturalSite").hide(500);
                        $(".islamicSite").show(500);
                    });


                    $("#agricultural").mouseenter(function () {
                        $(".universitySite").hide(500);
                        $(".engineeringSite").hide(500);
                        $(".STUni").hide(500);
                        $(".islamicSite").hide(500);
                        $(".agriculturalSite").show(500);
                    });

                    $("#ST").mouseenter(function () {
                        $(".universitySite").hide(500);
                        $(".engineeringSite").hide(500);
                        $(".agriculturalSite").hide(500);
                        $(".islamicSite").hide(500);
                        $(".STUni").show(500);
                    });

                    $("#university").mouseenter(function () {
                        $(".STUni").hide(500);
                        $(".engineeringSite").hide(500);
                        $(".agriculturalSite").hide(500);
                        $(".islamicSite").hide(500);
                        $(".universitySite").show(500);
                    });

                    $("#engineering").mouseenter(function () {
                        $(".STUni").hide(500);
                        $(".universitySite").hide(500);
                        $(".agriculturalSite").hide(500);
                        $(".islamicSite").hide(500);
                        $(".engineeringSite").show(500);
                    });


                    $("#all").mouseover(function () {
                        $(".STUni").show(500);
                        $(".engineeringSite").show(500);
                        $(".universitySite").show(500);
                        $(".islamicSite").show(500);
                        $(".agriculturalSite").show(500);
                    });
                });
            </script>

            <!----------Finnish Gallery-------- 
            ---------------------------------->
        </div>
    </div>
</div>
</div>
</body>
<?php include './include/footer.php'; ?>
