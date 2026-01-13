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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mes_id')->constrained()->restrictOnDelete();
            $table->foreignId('user_id')->constrained()->restrictOnDelete();
            $table->foreignId('campana_id')->constrained()->restrictOnDelete();
            $table->foreignId('departamento_id')->constrained()->restrictOnDelete();
            $table->foreignId('provincia_id')->constrained()->restrictOnDelete();
            $table->foreignId('distrito_id')->constrained()->restrictOnDelete();
            $table->foreignId('motivo_id')->constrained()->nullOnDelete();
            $table->foreignId('submotivo_id')->constrained()->nullOnDelete();
            $table->string('imagen_dni')->nullable();
            $table->dateTime('f_instalado')->nullable(); 
            $table->dateTime('f_edition')->nullable();
            $table->string('edited_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
