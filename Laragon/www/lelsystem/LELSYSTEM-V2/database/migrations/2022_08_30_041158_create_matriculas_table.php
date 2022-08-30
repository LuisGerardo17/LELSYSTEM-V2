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
            $table->string('codigo_matricula',10)->unique()->primary();
            $table->string('codigo_curso',10);
            $table->foreign('codigo_curso')->references('codigo_curso')->on('cursos');
            $table->string('cedula',10);
            $table->foreign('cedula')->references('cedula')->on('estudiantes');
            $table->boolean('activo');
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
