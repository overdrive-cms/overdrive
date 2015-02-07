<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::drop('pages');
        Schema::create('overdrive_pages', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('slug');
            $table->string('uri')->unique();
            $table->integer('parent');
            $table->boolean('has_children');
            $table->integer('collection_id');
            $table->string('title');
            $table->string('label');
            $table->text('description');
            $table->string('layout');
            $table->string('theme')->default('default');
            $table->integer('author_id');
            $table->text('scripts')->nullable();
            $table->text('styles')->nullable();
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
        Schema::drop('overdrive_pages');
    }

}
