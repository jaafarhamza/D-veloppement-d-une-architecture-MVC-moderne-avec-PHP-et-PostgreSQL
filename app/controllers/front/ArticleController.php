<?php

namespace App\Controllers\Front;

use App\Core\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Article',
            'content' => 'Bienvenue sur notre article !'
        ];
        echo $this->render('front/article', $data);
    }
}
