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
    public function down()
    {
      Schema::dropIfExists('fruits');
    }
}
