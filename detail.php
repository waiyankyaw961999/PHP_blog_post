<?php
require_once('core/autoload.php');

if (!isset($_GET['slug'])) {
    Helper::redirect('404.php', "Page not Found");
}
$slug = $_GET['slug'];
$detail = Post::detail($slug);
print_r($detail);
require_once('inc/header.php');
?>

    <!-- Content -->
    <div class="card card-dark">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-dark">
                        <div class="card-body">
                            <div class="row">
                                <!-- icons -->
                                <div class="col-md-4">
                                    <div class="row">
                                        <div
                                                class="col-md-4 text-center">
                                            <i
                                                    class="fas fa-heart text-warning">
                                            </i>
                                            <small
                                                    class="text-muted"><?php $detail->like_count ?></small>
                                        </div>
                                        <div
                                                class="col-md-4 text-center">
                                            <i class="far fa-comment text-dark"></i>
                                            <small
                                                    class="text-muted"><?php $detail->comment_count ?></small>
                                        </div>

                                    </div>
                                </div>
                                <!-- Icons -->

                                <!-- Category -->
                                <div class="col-md-4">
                                    <div class="row">
                                        <div
                                                class="col-md-12">
                                            <a href=""
                                               class="badge badge-primary"><?php $detail->slug ?></a>

                                        </div>
                                    </div>
                                </div>
                                 <!-- Category -->
                                <div class="col-md-4">
                                    <div class="row">
                                        <div
                                                class="col-md-12">
                                            <?php
                                            foreach ($detail->languages as $language=>$name) {
                                                echo "<a href=''
                                               class='badge badge-success'>$name;
                                            </a>";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- Category -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-md-12">
                <h3>What is HTML</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Sit quaerat facilis at quidem natus deleniti
                    consequatur fuga quo repellat, tenetur ipsam, voluptatum
                    aliquam alias nostrum a recusandae eaque maxime cum?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    At, iusto vel deleniti provident tenetur laborum enim
                    fuga doloribus veniam optio numquam sunt quae. Quae ad
                    distinctio, voluptatem ex facilis placeat.
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Sit quaerat facilis at quidem natus deleniti
                    consequatur fuga quo repellat, tenetur ipsam, voluptatum
                    aliquam alias nostrum a recusandae eaque maxime cum?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    At, iusto vel deleniti provident tenetur laborum enim
                    fuga doloribus veniam optio numquam sunt quae. Quae ad
                    distinctio, voluptatem ex facilis placeat.
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Sit quaerat facilis at quidem natus deleniti
                    consequatur fuga quo repellat, tenetur ipsam, voluptatum
                    aliquam alias nostrum a recusandae eaque maxime cum?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    At, iusto vel deleniti provident tenetur laborum enim
                    fuga doloribus veniam optio numquam sunt quae. Quae ad
                    distinctio, voluptatem ex facilis placeat.
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Sit quaerat facilis at quidem natus deleniti
                    consequatur fuga quo repellat, tenetur ipsam, voluptatum
                    aliquam alias nostrum a recusandae eaque maxime cum?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    At, iusto vel deleniti provident tenetur laborum enim
                    fuga doloribus veniam optio numquam sunt quae. Quae ad
                    distinctio, voluptatem ex facilis placeat.
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Sit quaerat facilis at quidem natus deleniti
                    consequatur fuga quo repellat, tenetur ipsam, voluptatum
                    aliquam alias nostrum a recusandae eaque maxime cum?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    At, iusto vel deleniti provident tenetur laborum enim
                    fuga doloribus veniam optio numquam sunt quae. Quae ad
                    distinctio, voluptatem ex facilis placeat.
                </p>
            </div>

            <!-- Comments -->
            <div class="card card-dark">
                <div class="card-header">
                    <h4>Comments</h4>
                </div>
                <div class="card-body">
                    <!-- Loop Comment -->
                    <div class="card-dark mt-1">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg"
                                         style="width:50px;border-radius:50%"
                                         alt="">
                                </div>
                                <div
                                        class="col-md-4 d-flex align-items-center">
                                    John Smith
                                </div>
                            </div>
                            <hr>
                            <p>Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit.
                                Consectetur soluta ex saepe
                                culpa asperiores blanditiis
                                autem tempore harum voluptatum
                                iure reiciendis iste eum,
                                commodi officiis doloremque nam.
                                Aut, voluptatibus nihil.</p>
                        </div>
                    </div>
                    <div class="card-dark mt-1">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg"
                                         style="width:50px;border-radius:50%"
                                         alt="">
                                </div>
                                <div
                                        class="col-md-4 d-flex align-items-center">
                                    John Smith
                                </div>
                            </div>
                            <hr>
                            <p>Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit.
                                Consectetur soluta ex saepe
                                culpa asperiores blanditiis
                                autem tempore harum voluptatum
                                iure reiciendis iste eum,
                                commodi officiis doloremque nam.
                                Aut, voluptatibus nihil.</p>
                        </div>
                    </div>
                    <div class="card-dark mt-1">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg"
                                         style="width:50px;border-radius:50%"
                                         alt="">
                                </div>
                                <div
                                        class="col-md-4 d-flex align-items-center">
                                    John Smith
                                </div>
                            </div>
                            <hr>
                            <p>Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit.
                                Consectetur soluta ex saepe
                                culpa asperiores blanditiis
                                autem tempore harum voluptatum
                                iure reiciendis iste eum,
                                commodi officiis doloremque nam.
                                Aut, voluptatibus nihil.</p>
                        </div>
                    </div>
                    <div class="card-dark mt-1">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg"
                                         style="width:50px;border-radius:50%"
                                         alt="">
                                </div>
                                <div
                                        class="col-md-4 d-flex align-items-center">
                                    John Smith
                                </div>
                            </div>
                            <hr>
                            <p>Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit.
                                Consectetur soluta ex saepe
                                culpa asperiores blanditiis
                                autem tempore harum voluptatum
                                iure reiciendis iste eum,
                                commodi officiis doloremque nam.
                                Aut, voluptatibus nihil.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

    </div>


<?php
require_once('inc/footer.php');
?>