<?php

namespace Dkpankaj1\Toastr;

use Dkpankaj1\Toastr\View\Components\Toaster;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ToastrServiceProvider extends ServiceProvider
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
        // Publish views
        $this->publishes([
            __DIR__ . '/resources/views/components' => resource_path('views/components'),
            __DIR__ . '/resources/assets/toastr' => public_path('assets/toastr')
        ], 'toastr');


        // Register the Blade component
        Blade::component('toastr', Toaster::class);
    }
}
