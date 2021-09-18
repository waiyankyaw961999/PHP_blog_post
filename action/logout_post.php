<?php
require_once "../core/autoload.php";
unset($_SESSION['user_id']);
Helper::redirect('../login.php');
