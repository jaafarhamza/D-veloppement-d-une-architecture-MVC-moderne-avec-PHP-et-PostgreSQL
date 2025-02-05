<?php

namespace App\Core;

class Validator
{
    public static function validate($data, $rules)
    {
        $errors = [];
        foreach ($rules as $field => $rule) {
            if (!isset($data[$field]) || !preg_match($rule, $data[$field])) {
                $errors[$field] = self::getErrorMessage($field);
            }
        }
        return $errors;
    }

    private static function getErrorMessage($field)
    {
        $messages = [
            'username' => 'Invalid username.',
            'password' => 'Invalid password.',
            'email' => 'Invalid email format.'
        ];
        return $messages[$field] ?? 'Invalid input';
    }

    public static function validateRegistration($data)
    {
        $rules = [
            'username' => '/^[a-zA-Z0-9]{3,20}$/',
            'password' => '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/',
        ];
        return self::validate($data, $rules);
    }


}
