<?php

namespace App\Http\Controllers;

use App\Models\Article;

class FeedController
{
    public function show()
    {
        $articles = Article::first()->get();

        return view('articles', [
            'articles' => $articles
        ]);
    }
}
