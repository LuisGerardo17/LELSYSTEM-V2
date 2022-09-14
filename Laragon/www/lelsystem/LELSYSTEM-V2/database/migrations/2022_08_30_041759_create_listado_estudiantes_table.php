<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListadoEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listado_estudiantes', function (Blueprint $table) {
            $table->string('cedula',10)->primary();
            $table->foreign('cedula')->references('cedula')->on('matriculas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('fecha');
            $table->string('descripcion');
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
        Schema::dropIfExists('listado_estudiantes');
    }
}
