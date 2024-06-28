<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_travels', function (Blueprint $table) {
            $table->id('travelID');
            $table->unsignedBigInteger('packageID');
            $table->string('nombre_viaje');
            $table->string('codigo_viaje');
            $table->string('destino');
            $table->float('costo_total');
            $table->integer('cant_cuotas');
            $table->string('tipo_moneda');
            $table->date('fecha_viaje');
            $table->string('plan_alojamiento');
            $table->string('nom_hotel');
            $table->text('itinerario');
            $table->timestamps();

            $table->foreign('packageID')->references('packageID')->on('tr_package');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tr_travels');
    }
};
