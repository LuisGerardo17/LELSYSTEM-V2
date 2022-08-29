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
            $table->id('id_cursos_actividades')->unique();
            $table->unsignedInteger('id_curso');
            $table->foreign('id_curso')->references('id_curso')->on('cursos');
            $table->unsignedInteger('id_actividad');
            $table->foreign('id_actividad')->references('id_actividad')->on('actividades');
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