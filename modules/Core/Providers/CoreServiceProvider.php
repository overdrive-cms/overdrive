<?php
namespace Modules\Core\Providers;

use Alchemy\Zippy\Zippy;
use App;
use Config;
use Lang;
use Modules\Core\Facades\Installer;
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

		App::bind('guzzle', function($app)
		{
			return new \GuzzleHttp\Client;
		});

		App:bindShared('modules.handler', function ($app)
		{
			return new \Modules\Core\Handlers\ModulesHandler($app['files'], $app['config'], $app['core.installer']);
		});

		App::bindShared('module', function($app)
		{
			return new \Modules\Core\Module($app['modules.handler'], $app['config'], $app['files']);
		});

		App::bindShared('core.installer', function($app)
		{
			return new Installer($app['files'], $app['config'], $app['guzzle']);
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
