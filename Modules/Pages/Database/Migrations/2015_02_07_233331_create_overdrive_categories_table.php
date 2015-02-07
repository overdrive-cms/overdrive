<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOverdriveCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('overdrive_categories', function(Blueprint $table)
		{
            $table->increments('id');
		    $table->string('slug');
            $table->string('name');
            $table->text('description')->nullable();
            $table->boolean('active')->default(true);
            $table->string('group')->nullable();
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('overdrive_categories');
	}

}
