<?php

namespace App\Providers;

use App\Category;
use App\Post;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('front.menu.menu', function ($view){
            if (Cache::has('categories')){
                $categories = Cache::get('categories');
            }else{
                $categories = Category::query()->where('parent_id')
                    ->with('children')
                    ->get();
                Cache::put('categories', $categories, 10);
            }
            $view->with('categories', $categories);
        });
        view()->composer('front.layouts.sidebar', function ($view){
            $view->with('popular_posts', Post::query()->orderBy('created_at', 'desc')->limit(3)->get());
            $view->with('latest_images', Post::query()->pluck('image')->all());
        });
    }
}
