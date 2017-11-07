<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('overview')->nullable();
            $table->string('poster')->nullable();
            $table->string('release_date')->nullable();
            $table->integer('show_id')->unsigned()->unique();
            $table->integer('season_id')->unsigned()->index();
            $table->integer('tmdb_id')->unsigned();
            $table->integer('season_number')->default(1)->unsigned()->index();
            $table->integer('episode_number')->default(1)->unsigned()->index();

            $table->boolean('allow_update')->default(true)->unsigned();
            $table->text('promo')->nullable();

            //TODO crew en guest_stars nog verwerken

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
        Schema::dropIfExists('episodes');
    }
}
