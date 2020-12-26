<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Post;

class SearchController extends Controller
{
    public function index(SearchRequest $request){
        $q = $request->q;
        $posts = Post::like($q)->with('category')->paginate(2);
        return view('front.posts.search', ['posts' => $posts, 'q' => $q]);
    }
}
