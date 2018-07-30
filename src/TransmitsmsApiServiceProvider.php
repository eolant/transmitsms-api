<?php

namespace Abreeden\TransmitsmsApi;

use Illuminate\Support\ServiceProvider;

class TransmitsmsApiServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
            __DIR__.'/config/config.php' => app()->basePath() . '/config/transmitsmsapi.php',
        ], 'config');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->mergeConfigFrom(__DIR__.'/config/config.php', 'transmitsmsapi');

        $this->app->singleton('transmitsmsapi', function ($app) {
        	$config = $app['config']->get('transmitsmsapi');

            return new TransmitsmsApi($config['api_key'], $config['secret']);
    	});

    	$this->app->bind('Abreeden\TransmitsmsApi\TransmitsmsApi', function ($app) {
            return $app->make('transmitsmsapi');
    	});
	}
}
