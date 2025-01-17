<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersCategoriesTable extends Migration
{
    public function up()  {
      Schema::create('suppliers_categories', function(Blueprint $table) {
  		    $table->engine = 'InnoDB';

  		    $table->increments('id_supplier_category')->unsigned();
  		    $table->integer('id_parent')->unsigned();
  		    $table->boolean('active')->default('0');
  		    $table->integer('position')->default('0');
  		    $table->boolean('is_root_category')->default('0');
  		    $table->index('id_parent','id_parent_category_supplier');

  		    $table->foreign('id_parent')
  		        ->references('id_supplier_category')->on('suppliers_categories')
  		        ->onDelete('cascade')
  		        ->onUpdate('cascade');

  		    $table->timestamps();
  		});
    }

    public function down()  {
      Schema::drop('suppliers_categories');
      }
}
