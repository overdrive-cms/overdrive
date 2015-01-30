<?php
namespace Modules\StaticPages\Database\Seeds;

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

		\DB::table('static_pages')->delete();
		$faker = \Faker\Factory::create();

		for ($i = 0; $i < 35; $i++) {
			$status = ($i > 25) ? 'live' : 'draft';
			$page = \Modules\StaticPages\StaticPage::create([
				'slug' => $faker->slug,
				'url' => $faker->slug,
				'preview' => $faker->text,
				'content_raw' => $faker->text,
				'processor' => '',
				'status' => $status,
			]);
		}

		// $this->call('App\Modules\StaticPages\Database\Seeds\FoobarTableSeeder');
	}

}
