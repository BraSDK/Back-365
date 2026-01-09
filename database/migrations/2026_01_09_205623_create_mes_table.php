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
        Schema::create('meses', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('mes');
            $table->smallInteger('anio');
            $table->string('nombre', 50);
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->enum('estado', ['activo', 'inactivo'])->default('activo'); 

            // Evita duplicar el mismo mes para el mismo año
            $table->unique(['mes', 'anio']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mes');
    }
};
