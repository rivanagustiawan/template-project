<?php

namespace rivanagustiawan\TemplateStarter;

use Illuminate\Support\ServiceProvider;

class TemplateStarterServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publikasi view (layout)
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/templatestarter'),
        ], 'views');

        // Publikasi asset (CSS)
        $this->publishes([
            __DIR__ . '/../public' => public_path('vendor/templatestarter'),
        ], 'assets');
    }

    public function register()
    {
        //
    }
}
