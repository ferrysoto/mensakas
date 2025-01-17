<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsLangTable extends Migration
{
    public function up() {
      Schema::create('products_lang', function(Blueprint $table) {
  		    $table->engine = 'InnoDB';

  		    $table->increments('id_products_lang')->unsigned();
  		    $table->integer('id_product')->unsigned();
  		    $table->integer('id_lang')->unsigned();
  		    $table->string('title', 255)->default(null);

  		    $table->foreign('id_product')
  		        ->references('id_product')->on('products')
  		        ->onDelete('cascade')
  		        ->onUpdate('cascade');

          $table->foreign('id_lang')
              ->references('id_language')->on('language')
              ->onDelete('cascade')
              ->onUpdate('cascade');

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
        Schema::dropIfExists('products_lang');
    }
}
