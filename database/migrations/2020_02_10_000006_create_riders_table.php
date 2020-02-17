<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRidersTable extends Migration
{
    public function up() {
      Schema::create('riders', function(Blueprint $table) {
  		    $table->engine = 'InnoDB';

  		    $table->increments('id_rider')->unsigned();
  		    $table->bigInteger('id_user')->unsigned();
  		    $table->boolean('active')->default('0');
  		    $table->integer('max_travel')->default('0');

  		    $table->foreign('id_user')
  		        ->references('id_user')->on('users')
  		        ->onDelete('cascade')
  		        ->onUpdate('cascade');

  		    $table->timestamps();
  		});
    }

      public function down()  {
  		    Schema::drop('riders');
      }
}
