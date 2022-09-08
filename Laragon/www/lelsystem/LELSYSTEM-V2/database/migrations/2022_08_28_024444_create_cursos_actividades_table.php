<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos_actividades', function (Blueprint $table) {
            $table->id('id_cursos_actividades');
            $table->bigInteger('codigo_curso');
            $table->foreign('codigo_curso')->references('codigo_curso')->on('cursos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('codigo_actividad',5);
            $table->foreign('codigo_actividad')->references('codigo_actividad')->on('actividades');
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
        Schema::dropIfExists('cursos_actividades');
    }
}
