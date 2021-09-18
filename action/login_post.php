<?php
require_once "../core/autoload.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $user = new User();
    $validationRes = $user->validate($_POST,'login');
    if($validationRes !== "Success")
    {
        Helper::redirect('../login.php',$validationRes);
    }

    $res = $user->login($_POST);
    if ($res["status"] == True) {
        $_SESSION['user_id'] = $res['data']->id;
        Helper::redirect('../index.php');
    }
    else
    {
        Helper::redirect('../login.php',$res['data']);
    }
}