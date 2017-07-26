<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('documento_id')->unsigne();
            $table->integer('n_documento');
            $table->integer('estado_id')->unsigned();
            $table->string('responsable');
            $table->text('descripcion');
            $table->integer('oficina_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->integer('unidad_id')->unsigned();
            $table->integer('marca_id')->unsigned();
            $table->string('serie');
            $table->string('destino');
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
        Schema::dropIfExists('activos');
    }
}
