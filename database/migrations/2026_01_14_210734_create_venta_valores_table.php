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
        Schema::create('venta_valores', function (Blueprint $table) {
            $table->id();

            // Relaciones principales
            $table->foreignId('venta_id')->constrained()->cascadeOnDelete();

            $table->foreignId('campo_id')->constrained('campos_campana')->cascadeOnDelete();

            // Para campos tipo lista_multiple
            $table->foreignId('opcion_id')->nullable()->constrained('opciones_campo')->nullOnDelete();

            // Valores según tipo de campo
            $table->string('valor_texto')->nullable();
            $table->decimal('valor_numero', 10, 2)->nullable();
            $table->date('valor_fecha')->nullable();

            $table->timestamps();

            // Evita duplicar el mismo campo en una venta
            $table->unique(['venta_id', 'campo_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venta_valores');
    }
};
