<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->double('price', 8, 2);
            $table->integer('discount');
            $table->integer('available_count');
            $table->text('actors')->nullable();
            $table->string('directors')->nullable();
            $table->string('writers')->nullable();
            $table->text('producers')->nullable();
            $table->string('format')->nullable();
            $table->text('language')->nullable();
            $table->text('description')->nullable();
            $table->string('subtitles')->nullable();
            $table->string('rated')->nullable();
            $table->string('studio')->nullable();
            $table->integer('runtime')->nullable();
            $table->date('release_date')->nullable();
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
        Schema::dropIfExists('products');
    }
}
