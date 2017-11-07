<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('Generic Name')->unique();
            $table->string('icon')->default('fa fa-fire');
            $table->string('query')->nullable();
            //$table->boolean('auto_update')->default(0);
            //$table->boolean('auto_update')->default(0);
            //$table->boolean('show_trailer')->default(0);
            //$table->boolean('show_rating')->default(0);
            //$table->boolean('active')->default(1);
            //$table->integer('weight')->default(1);
            //$table->integer('limit')->default(8);
            $table->boolean('update_from_external')->default(1);
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
        Schema::dropIfExists('categories');
    }
}
