<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('products', function (Blueprint $table) {
          $table->increments('id');
          $table->string('proName');
          $table->string('imagePath');
          $table->text('description');
          $table->integer('price');
          $table->integer('typeID');
          $table->double('unit', 8, 2);
          $table->integer('unitID');
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
