<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersStateLangTable extends Migration
{
    public function up()  {
      Schema::create('orders_state_lang', function(Blueprint $table) {
  		    $table->engine = 'InnoDB';

          $table->increments('id_orders_state_lang')->unsigned();
  		    $table->integer('id_order_state')->unsigned();
  		    $table->integer('id_lang')->unsigned();
  		    $table->string('name', 64)->default('');
  		    $table->string('state', 64)->default('');

  		    $table->foreign('id_lang')
  		        ->references('id_language')->on('language')
  		        ->onDelete('cascade')
  		        ->onUpdate('cascade');

          $table->foreign('id_order_state')
      		      ->references('id_orders_state')->on('orders_state')
      		      ->onDelete('cascade')
      		      ->onUpdate('cascade');

  		    $table->timestamps();
  		});
    }

    public function down()  {
        Schema::dropIfExists('orders_state_lang');
    }
}
