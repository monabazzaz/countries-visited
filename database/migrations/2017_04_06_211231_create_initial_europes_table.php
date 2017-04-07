<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialEuropesTable extends Migration
{
    // /**
    //  * Run the migrations.
    //  *
    //  * @return void
    //  */

    /*
    Migration for the countries table and values
    */
    public function up()
    {
      Schema::create('countries', function (Blueprint $table) {
        $table->increments('id');
        $table->string('city');
        $table->string('country');
        $table->integer('year');
        $table->integer('days');
        $table->timestamps();
      });
    }

    // /**
    //  * Reverse the migrations.
    //  *
    //  * @return void
    //  */

    /*
    Drops the countries table into the database if the table exists
    */
    public function down()
    {
      Schema::dropIfExists('countries');
    }
}
