<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementWinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('AdvertisementWin', function (Blueprint $table) {
      $table->integer('advID');
      $table->increments('awID');
      $table->integer('winUserID');
      $table->double('winAmount', 8, 2);
      $table->year('win_year');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
