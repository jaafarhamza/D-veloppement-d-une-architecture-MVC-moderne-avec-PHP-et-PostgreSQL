<?php

namespace App\Controllers\Back;

use App\Models\User;
use App\Models\Article;
use App\Core\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $userModel = new User();
        $articleModel = new Article();

        $data = [
            'user_count' => $userModel->count(),
            'article_count' => $articleModel->count(),
        ];

        echo $this->render('back/dashboard', $data);
    }
}
