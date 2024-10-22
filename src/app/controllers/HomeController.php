<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::getAll();
        return $this->render('home', compact('articles'));
    }

}