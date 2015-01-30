<?php
namespace App\Modules\StaticPages\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StaticPagesDatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('App\Modules\StaticPages\Database\Seeds\FoobarTableSeeder');
	}

}
