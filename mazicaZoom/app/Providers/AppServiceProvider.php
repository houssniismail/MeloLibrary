<?php

namespace App\Providers;

use View;
use App\Models\commentairs;
use App\Models\pieceMusical;
use Illuminate\Support\ServiceProvider;

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
        $pieces = pieceMusical::all();
       
        View::share('pieces',$pieces);
        // View::share('commentairs',$commentairs);
    }
}
