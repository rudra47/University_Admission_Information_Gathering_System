<div class="row ">
    <div class=" col-md-3 col-lg-3 " style="  margin-top: 40px;">
        <div class="col-md-12 col-lg-12 notice_box" style="">
            <img class="img-responsive" align="center" src="image/notice.png" width="100%;" style="padding-top: 80px;" >
        </div>
    </div>

    <div class=" col-md-5 col-lg-5 notice_main" style=" margin-top: 25px;">

        <?php
        
//        $commend = "select post.*, universities.name as category from post inner join catagory on post.categoryid = catagory.id ";

        $data = "SELECT * FROM notice_board order by not_id DESC limit 0,6";

        $query = mysqli_query($connection, $data);

        while ($row = mysqli_fetch_assoc($query)) {
            if ($row['not_notice'] != "") {
                ?>
                <div class="notice ">
                    <strong><?php echo $row['not_notice']; ?></strong> 
                    <span class="pull-right"><a href="pdf.php?id=<?= $row['not_id'] ?>"> view </a></span>
                    <div class="desc">
                        <p>
                            <?php echo $row['not_description']; ?>
                        </p>        
                    </div>
                </div>

                <?php
            } 
        }
        ?>

        <div class="">
            <span class="pull-right"><abbr title=" See all " > <a href="allNotice.php"> See all </a></abbr></span>
        </div>


    </div>
</div>