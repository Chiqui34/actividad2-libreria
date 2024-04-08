<?php

namespace App\Providers;

use App\Http\Controllers\LibroCRUDController;
use App\Models\Libro;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(Libro::class, function(){
            return new Libro();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
