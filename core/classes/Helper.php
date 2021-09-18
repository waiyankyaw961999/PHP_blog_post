<?php

class Helper
{
    public static function echoArr($arr)
    {
        echo "<pre style='color: red;'>";
        print_r($arr);
        die();
    }

    public static function filter($str)
    {
        $str = trim($str);
        $str = stripslashes($str);
        $str = htmlspecialchars($str);
        return $str;
    }

    public static function redirect($route, $message = "")
    {
        if ($message !== "") {
            $_SESSION['message'] = $message;
        }
        header("location:$route");
        die();
    }

    public static function showMessage()
    {
        if (isset($_SESSION['message'])) {
            $message = $_SESSION['message'];
            if (is_array($message)) {
                foreach ($message as $value) {
                    if ($value !== "") {
                        echo "<div class='alert alert-danger'>$value</div>";
                    }
                }
            } elseif (is_string($message)) {
                echo "<div class='alert alert-danger'>$message</div>";
            }
        }
        unset($_SESSION['message']);
    }

    public static function auth()
    {
        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];
            return DB::table('users')->where('id', $user_id)->getOne();
        } else {
            return False;
        }
    }
}
