<?php

namespace App\Http\Controllers;

use App\Models\Article;

class FeedController
{


    public function index()
    {
        $articles = Article::first()->get();

        return view('articles', [
            'articles' => $articles
        ]);
    }



    public function show()
    {
        $articles = Article::first()->get();

        return view('articles', [
            'articles' => $articles
        ]);
    }
}
