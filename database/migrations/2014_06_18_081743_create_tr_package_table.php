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
        Schema::create('tr_package', function (Blueprint $table) {
            $table->id('packageID');
            $table->string('nombre_package');
            $table->string('codigo_package');
            $table->string('dias');
            $table->string('hoteles');
            $table->string('doble/triple');
            $table->string('tour');
            $table->string('alojamiento');
            $table->string('traslado');
            $table->string('L_asistencia');
            $table->string('k_viaje');
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
        Schema::dropIfExists('tr_package');
    }
};
