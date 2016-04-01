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
            __DIR__.'/config/config.php' => config_path('transmitsmsapi.php'),
        ], 'config');

        $this->app['Abreeden\TransmitSmsApi\TransmitSmsApi'] = function ($app) {
            return $app['transmitsmsapi'];
        };

	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->mergeConfigFrom(__DIR__.'/config/config.php', 'transmitsmsapi');

        $this->app['transmitsmsapi'] = $this->app->share(function($app)
        {
            $config = $app['config']->get('transmitsmsapi');

            return new TransmitsmsApi($config['api_key'], $config['secret']);
        });

	}
}
