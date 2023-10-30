<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Support\ServiceProvider;

class ProfileServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    // public function boot(): void
    // {
    //     view()->composer('pages.users.profile', function ($view) {
    //         $pendingPosts = Post::where('status', 0)->get();
    //         $publishedPosts = Post::where('status', 1)->get();

    //         $view->with('pendingPosts', $pendingPosts);
    //         $view->with('publishedPosts', $publishedPosts);
    //     });
    // }
}
