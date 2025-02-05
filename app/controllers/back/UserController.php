<?php

namespace App\Controllers\Back;

use App\Core\Auth;
use App\Core\Validator;
use App\Core\Security;
use App\Models\User;
use App\Core\Controller;
use App\Core\Session;

class UserController extends Controller
{
    public function index()
    {
        $userModel = new User();
        $users = $userModel->findAll();

        $data = [
            'title' => 'Users',
            'users' => $users
        ];
        echo $this->render('back/users', $data);
    }

    public function register()
    {
        $data = [];
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'username' => Security::sanitize($_POST['username']),
                'password' => Security::sanitize($_POST['password']),
                'email' => Security::sanitize($_POST['email'])
            ];
            $errors = Validator::validateRegistration($data);
            if (empty($errors)) {
                $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
                (new User())->register($data);
                if (!headers_sent()) {
                    header('Location: /login');
                }
                exit;
            }
        }
        echo $this->render('back/register', ['data' => $data, 'errors' => $errors]);
    }

    public function login()
    {
        $errors = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = Security::sanitize($_POST['email']);
            $password = Security::sanitize($_POST['password']);
            $user = (new User())->findByEmail($email);
            if ($user && Auth::login($email, $password)) {
                Session::set('user', $user);
                if (!headers_sent()) {
                    if ($user['role'] === 'admin') {
                        header('Location: /dashboard');
                    } else {
                        header('Location: /home');
                    }
                    exit;
                }
            } else {
                $errors = 'Invalid email or password';
            }
        }
        echo $this->render('back/login', ['errors' => $errors]);
    }
}
