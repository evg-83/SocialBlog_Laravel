<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(6);
        // dd($posts);
        $randomPosts = Post::get()->random(4); //get()-sqlый запрос в БД
        // dd($randomPosts);
        $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(4); //countWith()- аргументом надо указать отношение
        // dd($likedPosts);

        return view('post.index', compact('posts', 'randomPosts', 'likedPosts'));
    }
}
