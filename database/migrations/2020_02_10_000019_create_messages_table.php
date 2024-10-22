<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    public function up() {
      Schema::create('messages', function(Blueprint $table) {
      		    $table->engine = 'InnoDB';

      		    $table->increments('id_messages')->unsigned();
      		    $table->integer('id_order')->unsigned()->unique();
      		    $table->integer('id_supplier')->unsigned();
      		    $table->integer('id_rider')->unsigned();
      		    $table->text('message');

      		    $table->foreign('id_order')
      		        ->references('id_order')->on('orders')
      		        ->onDelete('cascade')
      		        ->onUpdate('cascade');

              $table->foreign('id_supplier')
                   ->references('id_supplier')->on('suppliers')
                   ->onDelete('cascade')
                   ->onUpdate('cascade');

              $table->foreign('id_rider')
                ->references('id_rider')->on('riders')
                ->onDelete('cascade')
                ->onUpdate('cascade');

              $table->timestamps();

      		});
    }

    public function down() {
        Schema::dropIfExists('messages');
    }
}
