<?php namespace Illuminate3\Gengo\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Support\Facades\DB;

class LanguageSeedCommand extends Command {

    /**
    * The console command name.
    *
    * @var string
    */
    protected $name = 'gengo:languages';

    /**
    * The console command description.
    *
    * @var string
    */
    protected $description = 'Seed the languages database with data';

    /**
     * Exceute the console command
     *
     * @return void
     */
    public function fire()
    {
		$this->line('Welcome to the languages database seeder.');

		DB::table('iso_languages')->truncate();

		$csv = dirname(__FILE__) . '/seeds/' . 'iso_languages.csv';
		$file_handle = fopen($csv, "r");

		while (!feof($file_handle)) {

			$line = fgetcsv($file_handle);
			if (empty($line)) {
				continue; // skip blank lines
			}

			$c = array();
			$c['id']        = $line[0];
			$c['iso_639_1'] = $line[1];
			$c['iso_639_3'] = $line[2];
			$c['english']   = $line[3];
			$c['native']    = $line[4];
			$c['status']    = $line[5];

			DB::table('iso_languages')->insert($c);
		}

		fclose($file_handle);

		$this->line('The ISO Native Languages have been seeded');

		$this->line('The extra translations will now be added.');

		DB::table('iso_language_translates')->truncate();

		$csv = dirname(__FILE__) . '/seeds/' . 'iso_language_tranlates.csv';
		$file_handle = fopen($csv, "r");

		while (!feof($file_handle)) {
			$line = fgetcsv($file_handle);
			if (empty($line)) {
				continue; // skip blank lines
			}

			$c = array();
			$c['id'] = $line[0];
			$c['bg'] = $line[1];
			$c['cs'] = $line[2];
			$c['da'] = $line[3];
			$c['de'] = $line[4];
			$c['el'] = $line[5];
			$c['en'] = $line[6];
			$c['es'] = $line[7];
			$c['et'] = $line[8];
			$c['fi'] = $line[9];
			$c['fr'] = $line[10];
			$c['hr'] = $line[11];
			$c['hu'] = $line[12];
			$c['is'] = $line[13];
			$c['it'] = $line[14];
			$c['ja'] = $line[15];
			$c['lt'] = $line[16];
			$c['lv'] = $line[17];
			$c['mt'] = $line[18];
			$c['nl'] = $line[19];
			$c['no'] = $line[20];
			$c['pl'] = $line[21];
			$c['pt'] = $line[22];
			$c['ro'] = $line[23];
			$c['sk'] = $line[24];
			$c['sl'] = $line[25];
			$c['sv'] = $line[26];
			$c['tr'] = $line[27];

			DB::table('iso_language_translates')->insert($c);
		}
		fclose($file_handle);

		$this->line('Extra translations have been added.');

	}

}
