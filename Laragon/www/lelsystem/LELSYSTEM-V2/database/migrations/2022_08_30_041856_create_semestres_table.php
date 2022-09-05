<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemestresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semestres', function (Blueprint $table) {
            $table->id('id_semestre');
            $table->float('nota_general');
            $table->boolean('estado');
            $table->string('codigo_matricula',10);
            $table->foreign('codigo_matricula')->references('codigo_matricula')->on('matriculas');
            $table->bigInteger('id_archivo_parcial1');
            $table->foreign('id_archivo_parcial1')->references('id_archivo_parcial1')->on('archivos_parcial1');
            $table->bigInteger('id_archivo_parcial2');
            $table->foreign('id_archivo_parcial2')->references('id_archivo_parcial2')->on('archivos_parcial2');
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
        Schema::dropIfExists('semestres');
    }
}
