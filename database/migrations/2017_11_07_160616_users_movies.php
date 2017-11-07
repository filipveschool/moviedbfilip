<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersMovies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_movies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('movie_id')->unsigned()->index();
            $table->boolean('watchlist')->default(false)->unsigned();
            $table->boolean('favorite')->default(false)->unsigned();
            $table->timestamps();
        });

        Schema::create('users_shows', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('show_id')->unsigned()->index();
            $table->boolean('watchlist')->default(false)->unsigned();
            $table->boolean('favorite')->default(false)->unsigned();
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
        Schema::dropIfExists('users_movies');
    }
}
