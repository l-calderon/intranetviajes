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
        Schema::create('tr_health_sheet', function (Blueprint $table) {
            $table->id('health_sID');
            $table->unsignedBigInteger('userID');
            $table->string('grupo_sanguineo');
            $table->string('factor_rh');
            $table->text('tratamiento');
            $table->text('tratamiento_obs');
            $table->text('tratamiento_rec');
            $table->text('tratamiento_med');
            $table->text('tratamiento_sum');
            $table->text('tratamiento_dosis');
            $table->text('enfermedad');
            $table->text('enfermedad_obs');
            $table->text('enfermedad_rec');
            $table->text('enfermedad_med');
            $table->text('enfermedad_sum');
            $table->text('enfermedad_dosis');
            $table->text('medicamento');
            $table->text('medicamento_obs');
            $table->text('medicamento_rec');
            $table->text('medicamento_med');
            $table->text('medicamento_sum');
            $table->text('medicamento_dosis');
            $table->text('alergia');
            $table->text('alergia_obs');
            $table->text('alergia_rec');
            $table->text('alergia_med');
            $table->text('alergia_sum');
            $table->text('alergia_dosis');
            $table->text('inmunizacion');
            $table->text('vacunas_adicionales');
            $table->text('vacunas_covid');
            $table->text('efecto_secundarios');
            $table->text('informacion_adicional_salud');
            $table->text('tarjeta_seguro_medico');
            $table->text('tarjeta_seguro_privado');
            $table->string('historial_medico_pdf');
            
            $table->foreign('userID')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tr_health_sheet');
    }
};
