<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('offerAction', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('offerID');
        $table->string('confirmation');
        $table->double('offerAmount', 8, 2);
        $table->year('offer_year');
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
