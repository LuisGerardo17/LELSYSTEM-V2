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
            $table->id('id_archivo_curso')->unique();
            $table->string('nombre_archivo',1000)->unique();
            $table->unsignedInteger('id_curso');
            $table->foreign('id_curso')->references('id_curso')->on('cursos');
            $table->unsignedInteger('id_recurso');
            $table->foreign('id_recurso')->references('id_recurso')->on('recursos');
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
