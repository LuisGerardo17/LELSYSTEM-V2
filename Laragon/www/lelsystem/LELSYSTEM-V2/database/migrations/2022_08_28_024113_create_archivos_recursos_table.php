<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivosRecursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos_recursos', function (Blueprint $table) {
            $table->id('id_archivo_curso');
            $table->string('nombre_archivo',250)->unique();
            $table->string('codigo_curso',10);
            $table->foreign('codigo_curso')->references('codigo_curso')->on('cursos');
            $table->string('codigo_recurso',5);
            $table->foreign('codigo_recurso')->references('codigo_recurso')->on('recursos');
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
        Schema::dropIfExists('archivos_recursos');
    }
}
