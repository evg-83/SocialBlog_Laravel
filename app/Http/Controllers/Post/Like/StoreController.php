<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(Post $post)
    {
        // dd($post->id);
        auth()->user()->likedPosts()->toggle($post->id); //метод toggle() - отвяжет или привяжет лайк к посту

        return redirect()->back();
    }
}
