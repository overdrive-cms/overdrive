<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOverdriveCollectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('overdrive_collections', function(Blueprint $table)
		{
            $table->string('slug');
            $table->string('title');
            $table->string('sub_title');
            $table->text('description')->nullable();
            $table->string('template')->default('default');
            $table->string('status')->default('draft');
            $table->string('private')->default('0');
            $table->integer('author_id');
            $table->string('ordering')->default('ASC');
            $table->integer('meta_id');
            $table->timestamps();
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('overdrive_collections');
	}

}
