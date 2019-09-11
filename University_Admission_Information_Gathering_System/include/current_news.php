<div class="container">
    <div class="row ">
        <div class=" col-md-12 col-lg-12 news_full">
            <div class="col-md-1 col-lg-1 news" style=" text-align: center; background: #b8cbc9;"> 
                <cite title="Current News" >News</cite> 
            </div>
            <?php
            require 'config/config.php';
            $data = "SELECT * FROM notice_board order by not_id DESC limit 0,1";

            $query = mysqli_query($connection, $data);

            while ($row = mysqli_fetch_array($query)) {
                if ($row['not_notice'] != "") {
                    ?>
                    <div class=" col-md-11 col-lg-11 news_slide">
                        <marquee>
                            <a href="" class="text-info"> <?php echo $row['not_notice']; ?></a> 
                        </marquee>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>
