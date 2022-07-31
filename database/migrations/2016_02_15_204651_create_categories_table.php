<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for storing categories
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->nullable()->default(null);
            $table->integer('order')->default(1);
            $table->string('name');
            $table->string('slug')->unique();

            $table->text('picture', 65535)->nullable();
            $table->integer('show_main')->nullable();
            $table->text('main_design', 65535)->nullable();
            $table->text('description', 16777215)->nullable();
            $table->integer('is_active')->nullable();
            $table->integer('items')->nullable();
            $table->integer('items_plugin')->nullable();
            $table->text('color', 65535)->nullable();

            $table->foreign('parent_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('set null');
            $table->timestamps();

            $table->index("id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
    }
}
