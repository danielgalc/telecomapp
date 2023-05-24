<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo', ['reparacion', 'instalacion']);
            $table->text('descripcion');
            $table->date('fecha_inicio');
            $table->time('hora_inicio')->nullable();
            $table->dateTime('fecha_fin')->nullable();
            $table->boolean('comenzado')->default(false);
            $table->boolean('finalizado')->default(false);
            $table->foreignId('empleado_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('incidencia_id')->constrained('incidencias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('servicios');
    }
};

