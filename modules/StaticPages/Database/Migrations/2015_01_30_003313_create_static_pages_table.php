<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaticPagesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('static_pages', function(Blueprint $table) {
			$table->increments('id');
			$table->string('slug');
			$table->string('name');
			$table->string('url')->unique();
			$table->text('preview')->nullable();
			$table->text('content_raw');
			$table->text('content_compiled')->nullable();
			$table->string('processor')->nullabke();
			$table->string('status')->default('draft');
			$table->softDeletes();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migration.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('static_pages');
	}
}