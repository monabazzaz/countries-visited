<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialFruitsTable extends Migration
{
    // /**
    //  * Run the migrations.
    //  *
    //  * @return void
    //  */

    /*
    Migration for the fruits table and values
    */
    public function up()
    {
      Schema::create('fruits', function (Blueprint $table) {
        $table->increments('id');
        $table->string('type');
        $table->string('taste');
        $table->string('texture');
        $table->string('season');
        $table->timestamps();
      });
    }

    // /**
    //  * Reverse the migrations.
    //  *
    //  * @return void
    //  */

    /*
    Drops the fruits table into the database if the table exists
    */
    public function down()
    {
      Schema::dropIfExists('fruits');
    }
}
