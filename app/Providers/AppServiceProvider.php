<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('partial.sideartikel', function ($view) {
            $kategori = \App\KategoriArtikel::all();
            // $category = \App\Category::all();
            // $tag = \App\Tag::all();
            $recent = \App\Artikel::orderBy('created_at', 'desc')->take(3)->get();
            $view->with(compact('kategori','recent'));
        });

        view()->composer('partial.sideproduk', function ($view) {
            $kategori = \App\KategoriProduk::all();
            // $category = \App\Category::all();
            // $tag = \App\Tag::all();
            $recent = \App\Produk::orderBy('created_at', 'desc')->take(3)->get();
            $view->with(compact('kategori','recent'));
        });

        view()->composer('Frontend.home', function ($view) {
            $kategori = \App\KategoriProduk::all();
            // $category = \App\Category::all();
            // $tag = \App\Tag::all();
            $recent = \App\Produk::orderBy('created_at', 'desc')->take(3)->get();
            $view->with(compact('kategori','recent'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
