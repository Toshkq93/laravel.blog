<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(SearchRequest $request)
    {
        $posts = Post::like($request->q)->with('category')->paginate(2);
        return view('front.posts.search', ['posts' => $posts, 'q' => $request->q]);
    }

    public function autocomplite(Request $request)
    {
        $input = $request->get('query');
        $posts = Post::query()->where('title', 'LIKE' , "%$input%")->get();

        echo json_encode($posts);
    }
}
