<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id('id_curso')->unique();
            $table->string('codigo_curso')->unique();
            $table->string('nombre_curso',50)->unique();
            $table->string('descripcion',200);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->boolean('activo');
            $table->bigInteger('id_docente');
            $table->foreign('id_docente')->references('id_docente')->on('docentes');
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
        Schema::dropIfExists('cursos');
    }
}
