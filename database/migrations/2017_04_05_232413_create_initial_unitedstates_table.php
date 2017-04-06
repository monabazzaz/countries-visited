<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialUnitedstatesTable extends Migration
{

    public function up()
    {
      Schema::create('unitedstates', function (Blueprint $table) {
        $table->increments('id');
        $table->string('city');
        $table->string('state');
        $table->integer('year');
        $table->integer('days');
        $table->timestamps();
      });
    }

    public function down()
    {
      Schema::dropIfExists('unitedstates');
    }
}
