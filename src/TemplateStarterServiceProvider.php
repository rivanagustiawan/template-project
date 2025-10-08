<?php

namespace rivanagustiawan\VistekTemplateStarter;

use Illuminate\Support\ServiceProvider;

class TemplateStarterServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish langsung ke folder resources/views bawaan Laravel
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views'),
        ], 'vistek-views');

        // Publish langsung ke public bawaan Laravel
        $this->publishes([
            __DIR__ . '/../public' => public_path(),
        ], 'vistek-assets');
    }

    public function register()
    {
        //
    }
}
