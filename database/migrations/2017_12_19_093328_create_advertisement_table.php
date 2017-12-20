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
       Schema::create('advertisements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sectorName');
            $table->string('advType');
            $table->string('advTitle');
            $table->string('advExplanation');
            $table->integer('sectorID');
            $table->integer('unitID');
            $table->year('close_year');
            $table->year('start_year');
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
