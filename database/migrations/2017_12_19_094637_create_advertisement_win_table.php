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
        $table->increments('id');
        $table->integer('advID');
        $table->integer('winUserID');
        $table->double('winAmount', 8, 2);
        $table->date('win_year');
        $table->rememberToken();
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
        //
    }
}
