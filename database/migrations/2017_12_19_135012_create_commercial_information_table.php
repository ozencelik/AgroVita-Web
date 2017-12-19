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
      Schema::create('commercial_informations', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('userID');
          $table->integer('comRNo');
          $table->integer('chamberComNo');
          $table->integer('taxID');
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
