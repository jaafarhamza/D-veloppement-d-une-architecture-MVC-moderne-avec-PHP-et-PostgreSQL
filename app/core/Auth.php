<?php

namespace App\Core;

use App\Models\User;

class Auth
{
    public static function login($username, $password)
    {
        $user = (new User())->findByUsername($username);
        if ($user && password_verify($password, $user['password'])) {
            Session::set('user', $user);
            return true;
        }
        return false;
    }

    public static function logout()
    {
        Session::destroy();
    }

    public static function check()
    {
        return Session::get('user') !== null;
    }
}
