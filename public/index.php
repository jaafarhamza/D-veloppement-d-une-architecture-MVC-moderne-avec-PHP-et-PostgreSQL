<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;
use App\Core\Session;

Session::start();

$router = new Router();

$router->addRoute('home', 'Front\\HomeController', 'index');
$router->addRoute('article', 'Front\\ArticleController', 'index');
$router->addRoute('users', 'Back\\UserController', 'index');
$router->addRoute('login', 'Back\\UserController', 'login');
$router->addRoute('register', 'Back\\UserController', 'register');
$router->addRoute('dashboard', 'Back\\DashboardController', 'index');

$router->dispatch();
