<?php session_start();
require_once './config/function.php';

get_header();
get_navber();
get_menuSmall();
get_banner();
get_banner();
get_CurrentNews();

?>


<!-- Slider Start -->


<div class="container-fluid">
    <div class="row ">
        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 ">

            <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
            <div id="wowslider-container1">
                <div class="ws_images"><ul>
                        <li><img src="data1/images/dhaka_university.jpg" alt="Dhaka_University" title="Dhaka_University" id="wows1_0"/></li>
                        <li><img src="data1/images/hazi_mohammad_danesh_university.jpg" alt="Hazi_Mohammad_Danesh_University" title="Hazi_Mohammad_Danesh_University" id="wows1_1"/></li>
                        <li><img src="data1/images/jagannath_university.jpg" alt="Jagannath_University" title="Jagannath_University" id="wows1_2"/></li>
                        <li><img src="data1/images/jahangir_nagar_university.jpg" alt="Jahangir_Nagar_University" title="Jahangir_Nagar_University" id="wows1_3"/></li>
                        <li><img src="data1/images/rajshahi_university.jpg" alt="wowslider" title="Rajshahi_university" id="wows1_4"/></a></li>
                        <li><img src="data1/images/shahajalal_university_of_science_technology.jpg" alt="Shahajalal_University_Of_Science_Technology" title="Shahajalal_University_Of_Science_Technology" id="wows1_5"/></li>
                    </ul></div>
                <div class="ws_bullets"><div>
                        <a href="#" title="Dhaka_University"><span><img src="data1/tooltips/dhaka_university.jpg" alt="Dhaka_University"/>1</span></a>
                        <a href="#" title="Hazi_Mohammad_Danesh_University"><span><img src="data1/tooltips/hazi_mohammad_danesh_university.jpg" alt="Hazi_Mohammad_Danesh_University"/>2</span></a>
                        <a href="#" title="Jagannath_University"><span><img src="data1/tooltips/jagannath_university.jpg" alt="Jagannath_University"/>3</span></a>
                        <a href="#" title="Jahangir_Nagar_University"><span><img src="data1/tooltips/jahangir_nagar_university.jpg" alt="Jahangir_Nagar_University"/>4</span></a>
                        <a href="#" title="Rajshahi_university"><span><img src="data1/tooltips/rajshahi_university.jpg" alt="Rajshahi_university"/>5</span></a>
                        <a href="#" title="Shahajalal_University_Of_Science_Technology"><span><img src="data1/tooltips/shahajalal_university_of_science_technology.jpg" alt="Shahajalal_University_Of_Science_Technology"/>6</span></a>
                    </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery carousel</a> by WOWSlider.com v8.5</div>
                <div class="ws_shadow"></div>
            </div>	
            <script type="text/javascript" src="engine1/wowslider.js"></script>
            <script type="text/javascript" src="engine1/script.js"></script>

            <!-- End WOWSlider.com BODY section -->

        </div>
    </div>
</div>


<!-- Slider End -->

<!--Our Aim-->

<div class="container" style="border-bottom: 1px solid gray">
    <div class="row ">
        <div class=" col-md-11 col-lg-12 col-lg-offset-0 goal">
            <h1 style="font-size: 34px;"> Welcome To University Admission Information Gathering System (VAIGS) </h1>
        </div>
        <div class=" col-md-11 col-lg-11 col-lg-offset-1 col-md-offset-1 goal_2">

            <h5 style="margin-left: -50px;">We belive university admission students time is 
                very important.Many Students miss their admission for correct information. 
                We give them correct information 
            </h5>

        </div>
    </div>
</div>

<!-- Protivaban -->

<?php include './include/protivaban.php'; ?>

<!--notice-->

<div class="container notice_mein" style=" margin-top: 40px;">
    <?php include './include/Notice.php'; ?>
</div>

<!--Media Partner-->

<div class="container " style=" margin-top: 70px;">
    <div class="row ">
        <div class=" col-md-12 col-lg-12 share" style="  padding: 10px 0px">

            <div class="col-md-12 col-lg-12 share "  > 
                <h2> We Are In Media  </h2>
            </div>

            <div class="col-md-12 col-lg-12" style=" border-top: 1px solid #b6b4b4; "> 
                <div class=" col-lg-offset-4 col-md-5 col-lg-5">
                    <div class=" col-md-2 col-lg-2 youtube_logo " >
                        <cite title = " Youtube " ><img class="img-responsive" src="image/youtube.png" style="margin-top: 10px;"></cite>
                    </div>
                    <div class=" col-md-2 col-lg-2 fb_logo " >
                        <cite title=" Facebook " ><img class="img-responsive" src="image/fb.png" style="margin-top: 10px;"></cite>
                    </div>
                    <div class=" col-md-2 col-lg-2 twiter_logo " >
                        <cite title=" twiter " ><img class="img-responsive" align="" src="image/twiter.png" style="margin-top: 10px;"></cite>
                    </div>
                    <div class=" col-md-2 col-lg-2 linkdin_logo " >
                        <cite title=" Linkedin " ><img class="img-responsive" align="" src="image/linkdin.png" style="margin-top: 10px;"></cite>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer start -->

<?php get_footer(); ?>

