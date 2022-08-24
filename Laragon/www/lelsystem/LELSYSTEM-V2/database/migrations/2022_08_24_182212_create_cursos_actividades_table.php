<?php
//Enrique Mera
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
            $table->string('codigo_curso',5);
            $table->string('codigo_actividad',5);
            $table->foreign('codigo_curso')->references('codigo_curso')->on('cursos');
            $table->foreign('codigo_actividad')->references('codigo_actividad')->on('actividades');
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
