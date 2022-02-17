<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticlesController
{

    public function create() {
        return view('articles.create');
    }

    public function store()
    {
        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();



        return redirect('/articles');
    }

    public function show($id)
    {
        $article = Article::all();

        return view('articles.show', ['article' => $article[$id - 1]]);
    }
}


