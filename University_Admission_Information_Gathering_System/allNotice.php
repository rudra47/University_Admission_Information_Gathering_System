<?php
session_start();
require_once './config/function.php';

get_header();
get_menuSmall();
get_navber();
get_CurrentNews();
?>

<div class="container">
    <div class="row">
        <p style="font-size: 35px; text-align: center; padding: 30px 0;"> Important Notice </p>
    </div>
</div>
<div class="container">
    <div class="row">
        <section style="">
            <div class="col-lg-10 col-lg-offset-1 " style=" padding-bottom: 30px; margin-top: 15px;" >
                <div class="row">
                    <?php
                    $data = "SELECT * FROM notice_board order by not_id desc";

                    $query = mysqli_query($connection, $data);
                    ?>
                    <div class="col-lg-12">
                        <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Headline</th>
                                    <th>Description</th>
                                    <th>Manage</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Headline</th>
                                    <th>Description</th>
                                    <th>Manage</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($query)) {
                                    ?>
                                    <tr>
                                        <td><?= $row['not_notice']; ?></td>
                                        <td><?= $row['not_description']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" value="<?php $v = $row['not_id']; ?>" data-toggle="modal" data-target="#exampleModal">
                                                 View
                                            </button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!--Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel"> Notice </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <?php
                $id = $v;
                $data = "SELECT * FROM notice_board where not_id='$id'";
                $query = mysqli_query($connection, $data);
                $row = mysqli_fetch_assoc($query);
                ?>
                <div class="modal-title" style="background: #ebebeb; padding: 5px;">
                    <h4> Notice Headline </h4>
                    <p style=" font-size: 12px;">
                        <?php
                        echo $row['not_notice'];
                        ?>
                    </p>
                </div>

                <div class="modal-title" style="background: #dcdcdc; padding: 5px;">
                    <h4> Notice Description </h4>
                    <p style=" font-size: 12px;">
                        <?php
                        echo $row['not_description'];
                        ?>
                    </p>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>





<?php get_footer(); ?>