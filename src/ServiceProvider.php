<?php

namespace Webidentity\GLSPrintingService;


use Webidentity\GLSPrintingService\Client\ApplicationServices;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->registerPublishing();
        }

        $this->registerResources();

        $this->app->singleton(GLSPrintingService::class, function ($app) {
            return new GLSPrintingService(
                new ApplicationServices([
                    'trace' => 1
                ], config('gls-printing-service.soap-urls.' . config('gls-printing-service.url'))),
                app(config('gls-printing-service.logger')),
                config('gls-printing-service.log-http-communication')
            );
        });
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/gls-printing-service.php', 'gls-printing-service');
    }

    protected function registerResources()
    {
        $this->registerFacades();
    }

    protected function registerPublishing()
    {
        $this->publishes([
            __DIR__ . '/../config/gls-printing-service.php' => config_path('gls-printing-service.php')
        ], 'gls-printing-service-config');
    }

    protected function registerFacades()
    {
        $this->app->singleton('GLSPrintingService', function ($app) {
            return $app[GLSPrintingService::class];
        });
    }

}