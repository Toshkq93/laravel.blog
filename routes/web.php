<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PostController@index')->name('home');
Route::get('/about', 'MainController@about')->name('about');
Route::get('/contact', 'MainController@contact')->name('contact');

Route::get('/post/{id}', 'PostController@show')->name('post.article');

Route::get('/category/{slug}', 'CategoryController@index')->name('category.show');

Route::get('/search', 'SearchController@index')->name('search');
Route::get('/search/autocomplite', 'SearchController@autocomplite');

Route::get('logout', 'UserController@logout')->name('logout')->middleware('auth');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'MainController@index')->name('admin.index');
    Route::resource('/posts', 'PostController');
    Route::resource('/categories', 'CategoryController');
});

Route::group(['middleware' => 'guest'], function (){
    Route::get('/login', 'UserController@login')->name('login');
    Route::post('/login', 'UserController@signin')->name('signin');
    Route::get('/signup', 'UserController@create')->name('signup');
    Route::post('/signup', 'UserController@store')->name('register');
});

Route::fallback(function (){
    abort(404);
});
