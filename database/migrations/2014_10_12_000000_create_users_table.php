<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //integer unsigned increment
            $table->string('name'); //varchar 255
            $table->string('email')->unique(); //no se repite
            $table->timestamp('email_verified_at')->nullable(); //fechas verifica correo puede ser vacio
            $table->string('password'); //string almacena pass
            $table->rememberToken(); // varchar100 almacena token
            $table->timestamps(); //crea 2 columns created_at update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}