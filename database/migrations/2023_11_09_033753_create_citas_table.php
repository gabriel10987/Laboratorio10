<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->time('horario');
            $table->date('fecha');
            $table->integer('edad')->nullable();
            $table->string('condicion');
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('dni')->on('pacientes');
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('doctores');
            $table->unsignedBigInteger('diagnostico_id');
            $table->foreign('diagnostico_id')->references('id')->on('diagnosticos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
