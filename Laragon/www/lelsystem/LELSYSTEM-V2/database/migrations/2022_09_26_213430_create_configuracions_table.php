<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracions', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',150);
            $table->string('descripcion',250);
            $table->string('imagen',150);
            $table->string('logo',150);
            $table->string('slogan',150);
            $table->string('frase1',100);
            $table->string('frase2',100);
            $table->string('frase3',100);
            $table->string('razonsocial',150);
            $table->string('celular',9);
            $table->string('telefono',7);
            $table->string('direccion',150);
            $table->string('email',50);
            $table->string('facebook',100);
            $table->string('youtube',100);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuracions');
    }
}
