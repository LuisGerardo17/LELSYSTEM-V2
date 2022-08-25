<?php
//Enrique Mera
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
            $table->string('codigo_recurso',5)->primary()->unique();
            $table->string('nombre_recurso',5);
            $table->string('descripcion',5);
            $table->bigInteger('id_tipo_archivo');
            $table->foreign('id_tipo_archivo')->references('id_tipo_archivo')->on('tipo_archivos');
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
