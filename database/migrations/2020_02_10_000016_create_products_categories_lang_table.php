<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsCategoriesLangTable extends Migration
{
    public function up()  {
      Schema::create('products_categories_lang', function(Blueprint $table) {
  		    $table->engine = 'InnoDB';

  		    $table->increments('id_product_category')->unsigned();
  		    $table->integer('id_product')->unsigned()->default('0');
  		    $table->integer('id_lang')->unsigned();
  		    $table->string('name', 128);
  		    $table->string('description', 255);

  		    $table->foreign('id_lang')
  		        ->references('id_language')->on('language')
  		        ->onDelete('cascade')
  		        ->onUpdate('cascade');

          $table->foreign('id_product')
              ->references('id_product')->on('products')
              ->onDelete('cascade')
              ->onUpdate('cascade');

  		    $table->timestamps();
  		});
    }

    public function down()  {
        Schema::dropIfExists('products_categories_lang');
    }
}
