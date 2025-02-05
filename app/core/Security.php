<?php

namespace App\Core;

class Security
{
    public static function sanitize($data)
    {
        return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    }
}
