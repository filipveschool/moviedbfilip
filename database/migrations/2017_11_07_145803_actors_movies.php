<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ActorsMovies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actors_movies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actor_id')->unsigned()->index();
            $table->integer('movie_id')->unsigned()->index();
            $table->string('char_name')->default('Unknown');
            $table->tinyInteger('known_for')->default(0)->unsigned();
            $table->timestamps();

            $table->unique(['actor_id', 'movie_id']);

            //$table->unique(array('actor_id','movie_id'), 'actor_movie_unique');
        });

        Schema::create('actors_shows', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actor_id')->unsigned()->index();
            $table->integer('show_id')->unsigned()->index();
            $table->string('char_name')->default('Unknown');
            $table->tinyInteger('known_for')->default(0)->unsigned();
            $table->timestamps();

            $table->unique(['actor_id', 'show_id']);

            //$table->unique(array('actor_id','movie_id'), 'actor_movie_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actors_movies');
    }
}
