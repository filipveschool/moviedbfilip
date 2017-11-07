<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255)->nullable();
            $table->string('background')->nullable(); // backdrop_path
            //TODO belongs to collection nog uitwerken
            $table->string('budget')->nullable();
            //TODO genres nog uitwerken
            $table->string('genre')->nullable();
            $table->string('homepageurl')->nullable();
            $table->integer('tmdb_id')->nullable()->unique();
            $table->string('imdb_id')->nullable()->unique();
            $table->string('original_language')->nullable();
            $table->string('original_title')->nullable();
            $table->text('overview')->nullable();
            //$table->float('tmdb_popularity', 50)->nullable();
            $table->float('tmdb_popularity')->nullable();
            $table->string('poster')->nullable(); // poster_path
            //TODO production companies nog uitwerken met relaties

            //TODO production countries nog uitwerken met relaties

            $table->string('release_date')->nullable();
            $table->string('revenue')->nullable();
            $table->string('runtime')->nullable();
            //TODO spoken languages nog uitwerken
            $table->string('status')->nullable();
            $table->string('tagline')->nullable();
            $table->string('tmdb_rating', 10)->nullable();
            $table->integer('tmdb_vote_count')->nullable();

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
        Schema::dropIfExists('movies');
    }
}
