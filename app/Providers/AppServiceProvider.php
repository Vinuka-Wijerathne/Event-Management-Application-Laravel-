<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Event;
use App\Models\Service; // Import the Service model

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
        // Share the $events and $services variables with the 'partials.backend.navigation' view
        View::composer('partials.backend.navigation', function ($view) {
            $view->with('events', Event::all()); // Fetch all events and pass them to the view
            $view->with('services', Service::all()); // Fetch all services and pass them to the view
        });
        
    }
}
