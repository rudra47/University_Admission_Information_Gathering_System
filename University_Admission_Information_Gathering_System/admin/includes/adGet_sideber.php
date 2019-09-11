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
                    <img src="upload/<?= $_SESSION['userPhoto']; ?>" alt="user" class="img-responsive"/>
                    <h4> <?= $_SESSION['name']; ?></h4>
                    <p><i class="fa fa-circle"></i> online</p>
                </div>
                <div class="menu">
                    <h2>MAIN NAVIGATION</h2>
                    <ul>
                        <li><a href='home.php?page=home'><i class="fa fa-home"></i> Home </a></li>
                        <?php
                        if ($_SESSION['rollId'] <= 2) {
                            ?>
                            <li><a href='all-user.php?page=all-user'><i class="fa fa-user"></i> User </a></li>
                            <?php
                        }
                        ?>
                        <!--<li><a href='add-banner.php?page=all-banner'><i class="fa fa-cubes"></i> Banner </a></li>-->
<!--                        <li><a href='edu-board.php?page=edu-board'><i class="fa fa-cubes"></i> Education Board </a></li>
                        <li><a href='all-university.php?page=all-university'><i class="fa fa-home"></i> Add university </a></li>-->
                        <li><a href='uni-requirements.php?page=uni-requirements' style="font-size: 15px;"><i class="fa fa-home"></i> University requirements</a></li>
                        <li><a href='all-notice.php?page=all-notice'><i class="fa fa-newspaper-o"></i> Notice </a></li>
                        <!--<li><a href='all-photo.php?page=all-photo'><i class="fa fa-cubes"></i> Student photos </a></li>-->
                        <?php
                        if ($_SESSION['rollId'] <= 1) {
                            ?>
                            <!--<li><a href='all-content.php?page=all-content'><i class="fa fa-pagelines"></i> Page Content </a></li>-->
                            <?php
                        }
                        ?>
                        <?php
                        if ($_SESSION['rollId'] <= 3) {
                            ?>
                            <li><a href='all-message.php?page=all-massage'><i class="fa fa-comment"></i> Contact Massage </a></li>
                            <?php
                        }
                        ?>
                        <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                    </ul>
                </div>
            </div><!--sidebar end-->