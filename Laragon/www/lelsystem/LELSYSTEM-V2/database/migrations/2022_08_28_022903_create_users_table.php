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
            $table->id();
            $table->string('cedula',10)->unique();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('correo')->unique();
            $table->string('direccion');
            $table->string('contrasena')->unique();
            $table->string('contrasena_verified_at')->nullable();
            $table->string('telefono');
            $table->string('imagen');
            $table->string('rol');
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
