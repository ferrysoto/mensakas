<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    public function up() {
        Schema::create('address', function(Blueprint $table) {
		    $table->engine = 'InnoDB';

		    $table->increments('id_address')->unsigned();
		    $table->integer('id_state')->unsigned();
		    $table->string('address', 128)->default('');
        $table->string('city', 128);
		    $table->integer('zipcode')->default('00000');
		    $table->boolean('active')->default('0');
		    $table->boolean('deleted')->default('0');

		    $table->timestamps();
		});
  }

    public function down() {
        Schema::dropIfExists('address');
    }
}
