<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivosParcial1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos_parcial1', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_archivo',250);
            $table->double('nota');
            $table->double('promedio1');
            $table->unsignedInteger('id_matricula');
            $table->foreign('id_matricula')->references('id')->on('matriculas');
            $table->unsignedInteger('id_cursos_actividades');
            $table->foreign('id_cursos_actividades')->references('id')->on('cursos_actividades');
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
        Schema::dropIfExists('archivos_parcial1');
    }
}
