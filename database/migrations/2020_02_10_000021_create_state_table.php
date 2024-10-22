<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStateTable extends Migration
{
  public function up() {
		Schema::create('state', function(Blueprint $table) {
		    $table->engine = 'InnoDB';

		    $table->increments('id_state')->unsigned();
		    $table->string('name', 64)->default(null);
		    $table->boolean('active')->default('0');

		    $table->timestamps();
		});
}
    public function down()    {
		    Schema::drop('state');
    }
}
