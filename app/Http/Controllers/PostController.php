<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('front.posts.index', ['posts' => Post::query()->orderBy('created_at', 'desc')->with('category')->paginate(3), ]);
    }

    public function show($slug)
    {
        $post = Post::query()->find($slug);
        return view('front.posts.show', ['post' => $post]);
    }

}
