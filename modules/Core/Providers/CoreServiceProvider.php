<?php
namespace Modules\Core\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
	/**
	 * Register the Core module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('Modules\Core\Providers\RouteServiceProvider');

		App::bind('module', function($app)
		{
			return new \Modules\Core\Module($app['modules.handler'], $app['config'], $app['files']);
		});

		$this->registerNamespaces();
	}

	/**
	 * Register the Core module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('Core', __DIR__.'/../Resources/Lang/');

		View::addNamespace('Core', __DIR__.'/../Resources/Views/');
	}
}
