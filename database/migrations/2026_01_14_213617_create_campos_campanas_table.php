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
        Schema::create('campos_campanas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('campana_id')->constrained()->cascadeOnDelete();
            $table->foreignId('grupo_id')->constrained('grupos_campos')->cascadeOnDelete();

            $table->string('nombre', 255);
            $table->string('tipo', 50); // text, number, date, lista_multiple, comparar

            $table->boolean('visible')->default(true);
            $table->boolean('obligatorio')->default(false);

            $table->integer('orden')->default(1);
            $table->timestamps();

            // Recomendado
            $table->index(['campana_id', 'grupo_id']);
            $table->index(['campana_id', 'orden']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campos_campanas');
    }
};
