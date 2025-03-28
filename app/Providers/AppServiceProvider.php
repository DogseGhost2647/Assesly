<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\ExamenServiceInterface;
use App\Services\ExamenService;
use App\Contracts\PreguntaServiceInterface;
use App\Services\PreguntaService;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ExamenServiceInterface::class, ExamenService::class);
        $this->app->bind(PreguntaServiceInterface::class, PreguntaService::class);
    }

    public function boot()
    {
        //
    }
}
