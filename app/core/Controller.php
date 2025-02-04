<?php
namespace App\Core;

class Controller{ 
    protected $twig;
    public function __construct()
    {
       $this->twig = require_once __DIR__ . '/../config/twig.php';
    }

    protected function render(string $view, array $data = []): void
    {
        echo $this->twig->render("{$view}.twig", $data);
    }
}
?>