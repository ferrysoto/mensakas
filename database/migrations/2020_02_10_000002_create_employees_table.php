<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    public function up() {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id_employee');
            $table->integer('id_profile')->unsigned()->default('0');
            $table->string('dni', 10)->default('999999999A')->unique();
            $table->string('first_name');
            $table->string('lastname', 255);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('phone')->unique();
            $table->integer('id_address')->unsigned();
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
