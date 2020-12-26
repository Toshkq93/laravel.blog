<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug){
        $category = Category::query()->where('slug', $slug)->firstOrFail();
        $posts = $category->posts;
        return view('front.category.index', ['category' => $category, 'posts' => $posts]);
    }

}
