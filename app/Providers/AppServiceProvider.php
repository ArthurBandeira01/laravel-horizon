<?php

namespace App\Providers;

use App\Services\Images\InterventionImage;
use App\Services\Images\WatermarkInterface;
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
        $this->app->singleton(
            WatermarkInterface::class,
            InterventionImage::class
        );
    }
}
