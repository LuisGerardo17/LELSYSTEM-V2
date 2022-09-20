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
            $table->string('cedula',10)->unique()->primary();
            $table->string('nombres');
            $table->string('apellidos')->nullable();
            $table->string('correo')->unique();
            $table->string('direccion')->nullable();
            $table->string('contrasena');
            $table->string('contrasena_verified_at')->nullable();
            $table->string('telefono')->nullable();
            $table->string('imagen')->nullable();
            $table->string('rol')->nullable();
            $table->timestamps();
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
