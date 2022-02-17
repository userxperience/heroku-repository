<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticlesController
{

    public function index()
    {
        $articles = Article::first()->get();

        return view('articles', [
            'articles' => $articles
        ]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
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

        return view('articles.show', ['article' => Article::find($id)]);
    }

    public function update($id)
    {
        $article = Article::find($id);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles/' .$article->id);
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles');

    }
}
