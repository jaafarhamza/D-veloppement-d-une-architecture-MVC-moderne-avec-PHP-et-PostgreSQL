<?php

namespace App\Back;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class DashboardController {
    public function index() {
        $loader = new FilesystemLoader('../app/views');
        $twig = new Environment($loader);

        $data = [
            'user_count' => 150,
            'article_count' => 45,
            'recent_activities' => [
                'User John Doe logged in',
                'Article "How to use Twig" was published',
                'User Jane Smith registered'
            ]
        ];
        echo $twig->render('back/dashboard.twig', $data);
    }
}