<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersCategoriesLangTable extends Migration
{
  public function up() {
  		Schema::create('suppliers_categories_lang', function(Blueprint $table) {
  		    $table->engine = 'InnoDB';

  		    $table->increments('id_suppliers_categories_lang')->unsigned();
  		    $table->integer('id_category')->unsigned();
  		    $table->string('name', 128)->default('');
  		    $table->integer('id_lang')->unsigned();
  		    $table->string('description', 255)->default('');

  		    $table->index('id_category','id_category_suppliers_lang_fk');
  		    $table->index('id_lang','id_lang_supplier');

  		    $table->foreign('id_category')
  		        ->references('id_supplier_category')->on('suppliers_categories')
  		        ->onDelete('cascade')
  		        ->onUpdate('cascade');

          $table->foreign('id_lang')
      		      ->references('id_language')->on('language')
      		      ->onDelete('cascade')
      		      ->onUpdate('cascade');

  		    $table->timestamps();
  		});
    }
      public function down() {
  		    Schema::drop('suppliers_categories_lang');
    }
}
