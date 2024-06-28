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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('groupID')->nullable();
            $table->string('name');
            $table->string('apellidos')->default(''); // Valor predeterminado
            $table->string('telefono')->nullable(); // Hacer nullable si es necesario
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('sexo')->nullable(); // Hacer nullable si es necesario
            $table->string('documento')->nullable(); // Hacer nullable si es necesario
            $table->date('nacimiento')->nullable(); // Hacer nullable si es necesario
            $table->integer('edad')->nullable(); // Hacer nullable si es necesario
            $table->string('direccion')->nullable(); // Hacer nullable si es necesario
            $table->string('telefono_m')->nullable(); // Hacer nullable si es necesario
            $table->string('telefono_p')->nullable(); // Hacer nullable si es necesario
            $table->date('fecha')->nullable(); // Hacer nullable si es necesario
            $table->string('foto')->nullable(); // Hacer nullable si es necesario
            $table->string('tipo_viajero')->nullable(); // Hacer nullable si es necesario
            $table->string('pulsera')->nullable(); // Hacer nullable si es necesario
            $table->string('orden')->nullable(); // Hacer nullable si es necesario
            $table->string('hobbies')->nullable(); // Hacer nullable si es necesario
            $table->string('deportes')->nullable(); // Hacer nullable si es necesario
            $table->string('plato_fav')->nullable(); // Hacer nullable si es necesario
            $table->string('color_fav')->nullable(); // Hacer nullable si es necesario
            $table->text('detalle')->nullable(); // Hacer nullable si es necesario
            $table->text('detalles_act')->nullable(); // Hacer nullable si es necesario
            $table->text('detas_cond')->nullable(); // Hacer nullable si es necesario
            $table->text('detalles_otras_cond')->nullable(); // Hacer nullable si es necesario
            $table->text('informacion_ad')->nullable(); // Hacer nullable si es necesario
            $table->string('pdf_generar')->nullable(); // Hacer nullable si es necesario
            $table->string('pdf_total_user')->nullable(); // Hacer nullable si es necesario
            $table->string('pdf_fecha_hora')->nullable(); // Hacer nullable si es necesario
            $table->timestamps();

            $table->foreign('groupID')->references('groupID')->on('tr_group');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
