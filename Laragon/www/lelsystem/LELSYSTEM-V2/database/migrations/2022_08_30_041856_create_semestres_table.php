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
            $table->id();
            $table->double('nota');
            $table->boolean('estado');
            $table->unsignedInteger('id_matricula');
            $table->foreign('id_matricula')->references('id')->on('matriculas');
            $table->unsignedInteger('id_archivo_parcial1');
            $table->foreign('id_archivo_parcial1')->references('id')->on('archivos_parcial1');
            $table->unsignedInteger('id_archivo_parcial2');
            $table->foreign('id_archivo_parcial2')->references('id')->on('archivos_parcial2');
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
