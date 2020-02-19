<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id_user');
            $table->integer('id_profile')->unsigned()->default('0');
            $table->string('dni', 10)->default('999999999A')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('phone')->unique()->default('999999999');
            $table->integer('id_address')->unsigned()->default('1');
            $table->string('password');
            $table->rememberToken();
            $table->timestamp('hire_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('discharge_date')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('id_profile')
                ->references('id_profile')->on('profiles')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_address')
                ->references('id_address')->on('address')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('users');
    }
}
