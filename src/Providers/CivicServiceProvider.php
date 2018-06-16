<?php

namespace LMillucci\CivicSIP\Providers;

use Illuminate\Support\ServiceProvider;

class CivicServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/civic.php' => config_path('civic.php')
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('civic', function ($app) {
            $config = $app->make('config');
            $httpClient = $app->make(\GuzzleHttp\ClientInterface::class);

            $applicationID = $config->get('civic.applicationID');
            $applicationSecret = $config->get('civic.applicationSecret');
            $privateSigningKey = $config->get('civic.privateSigningKey');
            $environment = $config->get('civic.environment');

            $config = new \Blockvis\Civic\Sip\AppConfig(
                $applicationID,
                $applicationSecret,
                $privateSigningKey,
                $environment
            );

            return new \Blockvis\Civic\Sip\Client($config, $httpClient);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['civic'];
    }
}