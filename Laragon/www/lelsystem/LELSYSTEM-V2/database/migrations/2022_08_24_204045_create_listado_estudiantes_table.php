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
            $table->id('id_listado_estudiante')->unique();
            $table->date('fecha');
            $table->string('descripcion', 20);
            $table->unsignedInteger('id_matricula');
            $table->foreign('id_matricula')->references('id_matricula')->on('matriculas');

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
