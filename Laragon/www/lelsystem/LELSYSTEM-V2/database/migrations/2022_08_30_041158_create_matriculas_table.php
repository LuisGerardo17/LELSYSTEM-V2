<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->string('cedula',10)->primary();
            $table->foreign('cedula')->references('cedula')->on('estudiantes')->cascadeOnDelete()->cascadeOnUpdate();
            $table->bigInteger('codigo_curso');
            $table->foreign('codigo_curso')->references('codigo_curso')->on('cursos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('estado');
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
        Schema::dropIfExists('matriculas');
    }
}
