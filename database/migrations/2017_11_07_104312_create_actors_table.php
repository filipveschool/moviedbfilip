<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable()->unique();
            $table->text('biography')->nullable();
            //$table->integer('gender')->nullable();
            $table->string('gender')->nullable();

            $table->boolean('adult')->nullable();
            //TODO also_known_as verwerken
            $table->string('birthday')->nullable();
            $table->string('deathday')->nullable();
            $table->string('homepage')->nullable();
            $table->integer('tmdb_id')->nullable();
            $table->string('imdb_id')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->integer('popularity')->nullable();
            $table->string('profile_path')->nullable();
            $table->timestamps();
            //TODO awards bijvoegen
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actors');
    }
}
