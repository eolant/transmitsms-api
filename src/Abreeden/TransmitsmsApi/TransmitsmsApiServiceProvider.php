<?php namespace Abreeden\TransmitsmsApi;

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
		$this->package('abreeden/transmitsms-api');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->booting(function()
{
  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
  $loader->alias('TransmitsmsApi', 'abreeden\TransmitsmsApi\Facades\TransmitsmsApi');
});
		  $this->app['transmitsmsapi'] = $this->app->share(function($app)
		  {
		    return new TransmitsmsApi;
		  });

	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
