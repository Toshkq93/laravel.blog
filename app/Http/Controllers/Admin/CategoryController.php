<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index', ['categories' => Category::query()->get()]);
    }

    public function create()
    {
       return view('admin.category.create', [
           'category' => [],
           'categories' => Category::with('children')->where('parent_id')->get(),
           'delimiter' => ''
       ]);
    }

    public function store(CategoryStoreRequest $request)
    {
        Category::query()->create($request->all());

        return redirect()->route('categories.index')->with('success', 'Категория успешно добавлена');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('admin.category.edit', [
            'category' => Category::query()->findOrFail($id),
            'categories' => Category::with('children')->where('parent_id')->get(),
            'delimiter' => ''
        ]);
    }

    public function update(CategoryStoreRequest $request, $id)
    {
        Category::query()->findOrFail($id)->update($request->all());
        return redirect()->route('categories.index')->with('success', 'Ваши изменения успешно добавлены');
    }

    public function destroy($id)
    {
        $category = Category::query()->findOrFail($id);
        if ($category->children->count()){
            return redirect()->route('categories.index')->with('error', 'Категория имеет вложенные категории!');
        }
            $category->delete();
            return redirect()->route('categories.index')->with('success', 'Категория успешно удалена');
    }
}
