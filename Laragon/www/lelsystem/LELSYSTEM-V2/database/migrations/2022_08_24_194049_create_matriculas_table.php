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
            $table->id('id_matricula')->unique();
            $table->unsignedString('codigo_curso');
            $table->foreign('codigo_curso')->references('codigo_recurso')->on('cursos');
            $table->unsignedInteger('id_estudiante');
            $table->foreign('id_estudiante')->references('id_estudiante')->on('estudiantes');
            $table->bolean('activo');
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
