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
            $table->id('id_archivo_parcial1');
            $table->string('nombre_archivo',250);
            $table->float('nota');
            $table->float('promedio1');
            $table->string('cedula',10);
            $table->foreign('cedula')->references('cedula')->on('matriculas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->bigInteger('id_cursos_actividades');
            $table->foreign('id_cursos_actividades')->references('id_cursos_actividades')->on('cursos_actividades')->cascadeOnDelete()->cascadeOnUpdate();
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
