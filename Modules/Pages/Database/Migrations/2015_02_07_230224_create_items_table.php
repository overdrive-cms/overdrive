<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('overdrive_items', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('slug');
            $table->integer('collection_id');
            $table->string('title');
            $table->string('sub_title');
            $table->text('summary')->nullable();
            $table->text('body');
            $table->string('body_location')->default('database');
            $table->string('markup_type');
            $table->string('template')->default('default');
            $table->string('status')->default('draft');
            $table->string('private')->default('0');
            $table->integer('author_id');
            $table->integer('tags_id')->nullable();
            $table->integer('category_id');
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
		Schema::drop('overdrive_items');
	}

}
