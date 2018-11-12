<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialPsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_ps', function (Blueprint $table) {
             $table->increments('id');

            $table->unsignedInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('users');
            $table->unsignedInteger('numeroprenda');
            $table->enum('Estado', ['Espera', 'Listo']);
            $table->enum('Tipo_prenda',['Seda','Algodon','Mezclilla']);
            $table->date('fecha_recibido')->nullable();
            $table->time('hora_entrega');
            $table->time('hora_pListo')->nullable();
            $table->date('fecha_entragado')->nullable();
            $table->float('Costo',5,2)->nullable();
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
        Schema::dropIfExists('historial_ps');
    }
}
