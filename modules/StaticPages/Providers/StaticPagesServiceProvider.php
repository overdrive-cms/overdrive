<?php
namespace Modules\StaticPages\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class StaticPagesServiceProvider extends ServiceProvider
{
	/**
	 * Register the StaticPages module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('Modules\StaticPages\Providers\RouteServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the StaticPages module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('StaticPages', __DIR__.'/../Resources/Lang/');

		View::addNamespace('StaticPages', __DIR__.'/../Resources/Views/');
	}
}
