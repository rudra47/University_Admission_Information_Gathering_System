<body>

    <div class="container-fluid header_full">
        <div class="container header">
            <div class="row">

            </div><!--row end-->
        </div><!--container end-->
    </div><!--container-fluid end-->

    <div class="container-fluid content_full">
        <div class="row">
            <div class="col-md-2 sidebar">
                <div class="sidebar_user">
                    <img src="../adImage/avatar.png" alt="user" class="img-responsive"/>
                    <h6 style="color: white;"><?= $_SESSION['rollName']?></h6>
                    <h4><?= $_SESSION['name'] ?></h4>
                    <p><i class="fa fa-circle"></i> online</p>
                </div>
                <div class="menu">
                    <h2>MAIN NAVIGATION</h2>
                    <ul>
                        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home </a></li>
                        <li><a href="user.php"><i class="fa fa-dashboard"></i> User </a></li>
                        <li><a href="universitie.php"><i class="fa fa-user"></i> University </a></li>
                        <li><a href="notice.php"><i class="fa fa-sign-in"></i> Notice Board </a></li>
                        <li><a href="view-students.php"><i class="fa fa-image"></i> View Student </a></li>
                        <li><a href="add-banner.php"><i class="fa fa-image"></i> Add Banner </a></li>
                        <li><a href="imp-link.php"><i class="fa fa-image"></i> Add Important link </a></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                    </ul>
                </div>
            </div><!--sidebar end-->