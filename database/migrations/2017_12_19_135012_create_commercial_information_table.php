<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommercialInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('commercial_information', function (Blueprint $table) {
          $table->increments('comID');
          $table->integer('userID');
          $table->integer('comRNo');
          $table->integer('chamberComNo');
          $table->integer('taxID');




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
