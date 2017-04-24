<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('places', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name',75);
          $table->string('country',75);
          $table->string('continent',75);
          $table->string('location',75);
          $table->string('picture',75);
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
        Schema::dropIfExists('places');
    }
}
