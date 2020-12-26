<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePost;
use App\Post;

class PostController extends Controller
{

    public function index()
    {
        return view('admin.posts.index', ['posts' => Post::query()->paginate(5)]);
    }

    public function create()
    {
        return view('admin.posts.create', ['categories' => Category::query()->pluck('title', 'id')->all()]);
    }

    public function store(StorePost $request)
    {
        $data = $request->all();
        $data['image'] = Post::uploadImage($request);
        Post::query()->create($data);

        return redirect()->route('posts.index')->with('success', 'Статья успешно добавлена');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('admin.posts.edit', ['post' => Post::query()->find($id), 'categories' => Category::query()->pluck('title', 'id')->all()]);
    }

    public function update(StorePost $request, $id)
    {
        $post = Post::query()->find($id);
        $data = $request->all();

        if ($file = Post::uploadImage($request, $post->image)){
            $data['image'] = $file;
        }

        $post->update($data);

        return redirect()->route('posts.index')->with('success', 'Изменения успешно сохранены');
    }

    public function destroy($id)
    {
        $post = Post::query()->find($id);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Статья успешно удалена');
    }
}
