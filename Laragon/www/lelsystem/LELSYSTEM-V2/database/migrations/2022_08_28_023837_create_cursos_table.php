<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->string('nombre_curso',50)->primary()->unique();
            $table->string('descripcion',200);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('estado');
            $table->string('imagen')->default('foto.jpg');
            $table->string('cedula',10);
            $table->foreign('cedula')->references('cedula')->on('docentes')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('cursos');
    }
}
