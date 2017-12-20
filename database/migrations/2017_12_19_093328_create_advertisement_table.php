<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
   Schema::create('advertisement', function (Blueprint $table) {
      $table->increments('advID');
      $table->string('sectorName');
      $table->string('advType');
      $table->string('advTitle');
      $table->string('advExplanation');
      $table->integer('sectorID');
      $table->integer('unitID');
      $table->year('close_year');
      $table->year('start_year');
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
