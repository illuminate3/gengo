<?php namespace Illuminate3\Gengo;

use Illuminate\Support\ServiceProvider;
use Illuminate3\Gengo\Console\InstallCommand;
use Illuminate3\Gengo\Console\LanguageSeedCommand;

class GengoServiceProvider extends ServiceProvider {

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
		$this->package('Illuminate3/gengo');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerInstallCommands();
		$this->registerLanguageSeedCommands();
		$this->commands('command.gengo.install', 'command.gengo.languages');
	}

	/**
	* Register console commands gengo:install
	*
	* @return void
	*/
	public function registerInstallCommands()
	{
		$this->app['command.gengo.install'] = $this->app->share(function($app)
		{
			return new InstallCommand();
		});
	}

	/**
	 * Register console commands gengo:languages
	 *
	 * @return void
	 */
	public function registerLanguageSeedCommands()
	{
		$this->app['command.gengo.languages'] = $this->app->share(function($app)
		{
			return new LanguageSeedCommand();
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('gengo');
	}

}
