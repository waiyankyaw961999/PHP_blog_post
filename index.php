<?php
require_once("core/autoload.php");
$res = Helper::auth();
if ($res === False) {
    Helper::redirect('login.php');
}
$articles = DB::table('articles')->orderBy('id', 'DESC')->paginate(3);
$next_page = $articles['next_page'];
$prev_page = $articles['prev_page'];
require_once 'inc/header.php';
?>
    <div class="card card-dark">
        <div class="card-body">
            <?php
            if ($articles['current_page_no'] != 1) {
                echo "<a href='$prev_page' class='btn btn-danger'>Prev Posts</a>";
            }

            if ($articles['current_page_no']  != $articles['total_pages'])
                {
                    echo "<a href='$next_page' class='btn btn-danger float-right'>Next Posts</a>";
                }
            ?>

        </div>
    </div>
    <div class="card card-dark">
        <div class="card-body">
            <div class="row">
                <!-- Loop this -->
                <?php

                foreach ($articles['data'] as $a) {
                    ?>
                    <div class="col-md-4 m-3 mt-2 p-2">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top"
                                 src="https://pixinvent.com/demo/vuexy-vuejs-admin-dashboard-template/demo-1/img/content-img-1.228da091.jpg"
                                 alt="">
                            <div class="card-body">
                                <h5 class="text-dark"><?php echo $a->title ?></h5>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div
                                            class="col-md-4 text-center">
                                        <i
                                                class="fas fa-heart text-warning">
                                        </i>
                                        <small
                                                class="text-muted">100</small>
                                    </div>
                                    <div
                                            class="col-md-4 text-center">
                                        <i
                                                class="far fa-comment text-dark"></i>
                                        <small
                                                class="text-muted">12</small>
                                    </div>
                                    <div
                                            class="col-md-4 text-center">
                                        <a href='<?php echo "detail.php?slug=$a->slug"?>'
                                           class="badge badge-warning p-1">View</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
<?php
require_once('inc/footer.php');
?>