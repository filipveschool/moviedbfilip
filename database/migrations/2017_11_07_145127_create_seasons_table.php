<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seasons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('release_date')->nullable();
            $table->string('poster')->nullable();
            $table->text('overview')->nullable();
            $table->integer('number')->default(1)->unique();
            $table->integer('show_id')->nullable()->index(); // Verwijzing naar de tv show zen primary key
            $table->string('show_imdb_id')->nullable()->index();
            $table->integer('show_tmdb_id')->nullable()->index();

            $table->boolean('allow_update')->default(true)->unsigned();

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
        Schema::dropIfExists('seasons');
    }
}
