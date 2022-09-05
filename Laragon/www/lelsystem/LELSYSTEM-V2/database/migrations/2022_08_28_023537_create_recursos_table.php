<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recursos', function (Blueprint $table) {
            $table->string('codigo_recurso',50)->unique()->primary();
            $table->string('nombre_recurso',50);
            $table->string('descripcion',200);
            $table->bigInteger('id_tipo_archivo');
            $table->foreign('id_tipo_archivo')->references('id_tipo_archivo')->on('tipo_archivos')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('recursos');
    }
}
