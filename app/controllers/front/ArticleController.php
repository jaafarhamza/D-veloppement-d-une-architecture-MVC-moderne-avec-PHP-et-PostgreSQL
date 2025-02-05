<?php
namespace App\Controllers\Front;

use App\Core\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articleModel = new Article();
        $articles = $articleModel->findAll();
        
        $data = [
            'title' => 'Articles',
            'articles' => $articles
        ];
        echo $this->render('front/article', $data);
    }
}
