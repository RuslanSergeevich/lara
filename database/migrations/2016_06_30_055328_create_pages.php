<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function(Blueprint $table){
            $table->increments('id');
            $table->string('title', 255);
            $table->string('description', 255);
            $table->string('keywords', 255);
            $table->string('slug', 100);
            $table->string('name', 200);
            $table->text('body');
            $table->text('markerPosition');
            $table->text('mapZoom');
            $table->text('mapCenter');
            $table->boolean('enabled');
            $table->date('published_at');
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
        Schema::drop('pages');
    }
}
