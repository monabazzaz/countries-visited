<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialUnitedstatesTable extends Migration
{

  /*
  Migration for the state table and values
  */
    public function up()
    {
      Schema::create('states', function (Blueprint $table) {
        $table->increments('id');
        $table->string('city');
        $table->string('state');
        $table->integer('year');
        $table->integer('days');
        $table->timestamps();
      });
    }

  /*
  Drops the state table into the database if the table exists
  */
    public function down()
    {
      Schema::dropIfExists('states');
    }
}
