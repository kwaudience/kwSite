<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class ViewServiceProvider extends ServiceProvider
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
    public function boot(): void
    {
          // Appliquer aux vues admin ou client uniquement
          View::composer([
            'dashboard.admin.*',
            'dashboard.client.*'
        ], function ($view) {
            $user = Auth::user();
            $services = [];

            if ($user && method_exists($user, 'services')) {
                $services = $user->services; // Relation Eloquent ou attribut
            }

            $view->with('services', $services);
        });
    }
}
