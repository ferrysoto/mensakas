<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
  public function up() {
 		Schema::create('suppliers', function(Blueprint $table) {
 		    $table->engine = 'InnoDB';

 		    $table->increments('id_supplier')->unsigned();
 		    $table->string('name', 100);
 		    $table->integer('id_category_supplier')->unsigned()->default('0');
        $table->string('email')->unique();
        $table->integer('id_address')->unsigned();
 		    $table->integer('phone')->unique();
 		    $table->boolean('active')->default('0');

        $table->foreign('id_address')
            ->references('id_address')->on('address')
            ->onDelete('cascade')
            ->onUpdate('cascade');


 		    $table->foreign('id_category_supplier')
 		        ->references('id_supplier_category')->on('suppliers_categories')
 		        ->onDelete('cascade')
 		        ->onUpdate('cascade');

 		    $table->timestamps();
 		   });
     }

     public function down()  {
 		    Schema::drop('suppliers');
     }
}
