<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('articles', function(Blueprint $table){
            $table->increments('id');
            $table->string('title', 100);
            $table->text('body');
            $table->string('slug', 200);
            $table->boolean('enabled');
            $table->date('published_at');
            $table->timestamps();

=======
        Schema::create('articles', function($t){
            $t->increments('id');
            $t->string('title', 100);
            $t->text('body');
            $t->string('slug', 200);
            $t->boolean('enabled');
            $t->timestamps();
>>>>>>> d8c0326e181d08607813fa36679853dc347be8cb
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
