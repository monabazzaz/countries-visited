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
    public function up()
    {
      Schema::create('europes', function (Blueprint $table) {
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
    public function down()
    {
      Schema::dropIfExists('europes');
    }
}
