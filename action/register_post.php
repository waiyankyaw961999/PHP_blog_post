<?php
require_once "../core/autoload.php";

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $user = new User();
    $validationRes = $user->validate($_POST,'register');
    $res =  $user->register($_POST);

    if($validationRes !== "Success")
    {
        Helper::redirect('../register.php', $validationRes);
    }
    if($res !== True)
    {
        Helper::redirect('../register.php', $res);
    }
    else{
        Helper::redirect('../login.php', "Successful Registration ");
    }
}

