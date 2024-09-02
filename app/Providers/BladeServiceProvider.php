<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
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
        Blade::directive('translate', function ($key) {
            $key = ucfirst(str_replace('_', ' ', $key));
            if (File::exists(base_path('lang/en.json'))) {
                $jsonString = file_get_contents(base_path('lang/en.json'));
                $jsonString = json_decode($jsonString, true);
                if (! isset($jsonString[$key])) {
                    $jsonString[$key] = $key;
                    saveJSONFile('en', $jsonString);
                }
            }

            return __($key);
        });
    }
}
