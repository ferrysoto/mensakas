<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersRiderTable extends Migration
{
    public function up()  {
      Schema::create('orders_rider', function(Blueprint $table) {
      		    $table->engine = 'InnoDB';

      		    $table->increments('id_order_rider')->unsigned();
      		    $table->integer('id_order')->unsigned();
      		    $table->integer('id_rider')->unsigned();
      		    $table->integer('id_order_invoice')->unsigned();

      		    $table->foreign('id_order')
      		        ->references('id_order')->on('orders')
      		        ->onDelete('cascade')
      		        ->onUpdate('cascade');

              $table->foreign('id_rider')
                  ->references('id_rider')->on('riders')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

              $table->foreign('id_order_invoice')
                  ->references('id_invoice')->on('invoices')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

      		    $table->timestamps();
      		});
    }

    public function down() {
        Schema::dropIfExists('orders_rider');
    }
}
