<?php

namespace rivanagustiawan\vistek_template_starter;

use Illuminate\Support\ServiceProvider;

class TemplateStarterServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/vistek-template-starter'),
        ], 'views');

        $this->publishes([
            __DIR__ . '/../public' => public_path('vendor/vistek-template-starter'),
        ], 'assets');
    }

    public function register()
    {
        //
    }
}
