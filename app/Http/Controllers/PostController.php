<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function posts()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('posts.index')->with('posts', $posts);
    }
}
