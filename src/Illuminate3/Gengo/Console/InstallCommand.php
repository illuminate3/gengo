<?php namespace Illuminate3\Gengo\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class InstallCommand extends Command {

	/**
	* The console command name.
	*
	* @var string
	*/
	protected $name = 'gengo:install';

	/**
	* The console command description.
	*
	* @var string
	*/
	protected $description = 'run migrations and seed tables';

	/**
	 * Exceute the console command
	 *
	 * @return void
	 */
	public function fire()
	{

		if ($this->confirm('Setup the databse tables? [yes|no]'))
		{
			$this->call('migrate', array('--env' => $this->option('env'), '--package' => 'Illuminate3/gengo' ) );
		}

		if ($this->confirm('Seed the language tables? [yes|no]'))
		{
			$this->call('gengo:languages');
		}
	}


	public function getOptions()
	{
		return array(
			array('env', null, InputOption::VALUE_OPTIONAL, 'The environment the command should run under.', null),
		);
	}
}
