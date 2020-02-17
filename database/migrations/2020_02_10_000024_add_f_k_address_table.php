<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFKAddressTable extends Migration
{
    public function up() {
      Schema::table('address', function (Blueprint $table) {
          $table->foreign('id_state')
              ->references('id_orders_state')->on('orders_state')
              ->onDelete('cascade')
              ->onUpdate('cascade');
            });
    }
}