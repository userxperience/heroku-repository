<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticlesController
{
    public function show($id)
    {
        $article = Article::all();

        return view('articles.show', ['article' => $article[$id - 1]]);
    }
}


