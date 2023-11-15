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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->string('dni')->primary();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('email');
            $table->date('fecha_nacimiento');
            $table->string('contraseña');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('username')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
