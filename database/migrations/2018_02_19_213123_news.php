<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function(Blueprint $table){

            $table->increments('id');
            $table->string('title_az');
            $table->string('title_en');
            $table->string('title_ru');
            $table->string('content_az');
            $table->string('content_en');
            $table->string('content_ru');
            $table->string('photo');
            $table->string('link');
            $table->boolean('active')->default(1);
            $table->integer('category')->unsigned();
            $table->foreign('category')->references('id')->on('news_categories');
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
        Schema::dropIfExists('news');
    }
}
