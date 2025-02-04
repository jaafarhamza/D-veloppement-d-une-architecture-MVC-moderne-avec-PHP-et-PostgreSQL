<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;

$router = new Router();

$router->addRoute('home', 'Front\\HomeController', 'index');
$router->addRoute('article', 'Front\\ArticleController', 'index');

$router->dispatch();
