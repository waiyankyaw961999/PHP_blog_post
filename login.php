<?php
require_once "core/autoload.php";
$res = Helper::auth();

if ($res) {
    Helper::redirect('index.php');
}

require_once("inc/header.php");
?>

<div class="card card-dark">
    <div class="card-header bg-warning">
        <h3>Login</h3>
    </div>
    <div class="card-body">
        <?php
        Helper::showMessage();
        ?>
        <form action="action/login_post.php" method="post">
            <div class="form-group">
                <label for="" class="text-white">Enter Username</label>
                <input type="email" class="form-control" name="email"
                       placeholder="enter your mail">
            </div>
            <div class="form-group">
                <label for="" class="text-white">Enter Password</label>
                <input type="password" class="form-control" name="password"
                       placeholder="enter password">
            </div>
            <input type="submit" value="Login"
                   class="btn  btn-outline-warning">
        </form>
    </div>
</div>

<?php
require_once("inc/footer.php");
?>
