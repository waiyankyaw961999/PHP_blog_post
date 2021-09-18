<?php

class User
{

    public function register($request)
    {
        // check email already exist
        $user = DB::table('users')->where('email', $request['email'])->getOne();
        if ($user)
        {
            return "Email Already Exists";
        }
        else
        {
            $user = DB::create('users', [
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => password_hash($request['password'], PASSWORD_BCRYPT)
            ]);
            return True;
        }

    }
    public
    function validate($request, $type)
    {
        if ($type === "login") {
            if ($request['email'] == "" or $request['password']=="") {
                return "Incomplete Login Attempt";
            }
        }
        if ($type === "register") {
            if ($request['name']=="" or $request['email']="" or $request['password'] =="") {
                return "Incomplete Registration Process";
            }
        }
        return "Success";

    }

    public
    function login($request)
    {
        $user = DB::table('users')->where("email", $request['email'])->getOne();

        if (!$user or (password_verify($request['password'], $user->password)) != "") {
            return array("status" => False,
                "data" => "Username and Password Incorrect");
        }
        return array("status" => True,
            "data" => $user);
    }

}