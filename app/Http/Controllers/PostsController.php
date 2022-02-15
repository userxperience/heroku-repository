<?php


namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;


class PostsController extends Model
{
    public function show($slug)
    {
        return view('post', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }
}
