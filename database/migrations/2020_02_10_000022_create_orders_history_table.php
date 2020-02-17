<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersHistoryTable extends Migration
{
    public function up() {
      Schema::create('orders_history', function(Blueprint $table) {
    		    $table->engine = 'InnoDB';

    		    $table->increments('id_order_history')->unsigned();
    		    $table->integer('id_order')->unsigned();
    		    $table->bigInteger('id_user')->unsigned();
    		    $table->integer('id_order_state')->unsigned();

    		    $table->foreign('id_order')
    		        ->references('id_order')->on('orders')
    		        ->onDelete('cascade')
    		        ->onUpdate('cascade');

            $table->foreign('id_user')
              ->references('id_user')->on('users')
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
        Schema::dropIfExists('orders_history');
    }
}
