<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_examens', function (Blueprint $table) {
            $table->id('id_curso_examen')->unique();
            $table->string('nombre_curso',50);
            $table->foreign('nombre_curso')->references('nombre_curso')->on('cursos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('codigo_examen',5);
            $table->foreign('codigo_examen')->references('codigo_examen')->on('examens')->cascadeOnDelete()->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso_examens');
    }
}
