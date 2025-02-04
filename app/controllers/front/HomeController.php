<?php

namespace App\Controllers\Front;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Accueil',
            'content' => 'Bienvenue  site !'
        ];
        echo $this->render('front/home', $data);
    }
}
