<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\confession;
use App\Models\confessionCategory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $users = User::all(); // Fetch all users
            $view->with('users', $users); // Share users with all views
        });

        View::composer(
            ['crushing-list.blade.php', 'general-list.blade.php', 'university-life-list.blade.php'],
            function ($view) {
                $confessions = Confession::all(); // Fetch all confessions
                $categories = confessionCategory::all(); // Fetch all confession categories

                $view->with('confessions', $confessions) // Share confessions
                     ->with('categories', $categories); // Share categories
            }
        );
    }
}
