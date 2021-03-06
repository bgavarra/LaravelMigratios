<?php

use Illuminate\Support\Facades\Schema;
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
      Schema::create('products', function (Blueprint $table){
      $table->softDeletes();
      $table->timestamps();
      $table->increments('id')->unique();
      $table->string('nome');
      $table->string('cod_barras');
      $table->string('fabricante');
      $table->integer('provider_id')->unsigned();
      $table->foreign('provider_id')->references('id')->on('providers');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
