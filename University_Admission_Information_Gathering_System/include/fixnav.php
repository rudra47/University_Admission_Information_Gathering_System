<!--fixed nav-->

<div class="container" style="margin-top: 10px;">
    <div class="row ">
        <!-- Fixed navbar -->
        <nav id="header" class="navbar navbar-fixed-top navbarn">
            <div id="header-container" class="container navbar-container">
                <div class="navbar-header">
                    <a id="brand" class="navbar-brand" href="#">UAIGS</a>
                </div>
                <div class="  col-lg-7">
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav col-lg-offset-3">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li class="dropdown">
                                <a href="importentlinks.php" >Important Links</a>
                            </li>
                            <li class="dropdown">
                                <a href="science-find.php" >Find University</a>
                            </li>
                            <li><a href="login.php"> Your Profile </a></li>
                            <li><a href="about_us.php">About Us</a></li>
                            <li><a href="contact-us.php" >Contact Us</a></li>
                        </ul>
                    </div> <!-- /.nav-collapse -->
                </div> <!-- /.nav-collapse -->

                <!-- pop up contact us -->
                <div class = "modal fade" id = "myModal" role = "dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4> Contact </h4>
                            </div>

                            <div class="modal-body">
                                <h4> Contact Us </h4>
                            </div>

                            <div class="modal-footer"> 
                                <a class="btn btn-primary" data-dismiss="modal">Close</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div  class=" col-lg-4 srch">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div><!-- /input-group -->
                </div>
            </div><!-- /.container -->
        </nav><!-- /.navbar -->
    </div>
</div>