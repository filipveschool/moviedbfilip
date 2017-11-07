<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DirectorsMovies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directors_movies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('director_id')->unsigned()->index();
            $table->integer('movie_id')->unsigned()->index();
            $table->timestamps();

            $table->unique(['director_id', 'movie_id']);

        });

        Schema::create('directors_shows', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('director_id')->unsigned()->index();
            $table->integer('show_id')->unsigned()->index();
            $table->timestamps();

            $table->unique(['director_id', 'show_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('directors_movies');
    }
}
