<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WritersMovies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writers_movies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('writer_id')->unsigned()->index();
            $table->integer('movie_id')->unsigned()->index();
            $table->timestamps();

            $table->unique(['writer_id', 'movie_id']);

        });

        Schema::create('writers_shows', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('writer_id')->unsigned()->index();
            $table->integer('show_id')->unsigned()->index();
            $table->timestamps();

            $table->unique(['writer_id', 'show_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('writers_movies');
    }
}
