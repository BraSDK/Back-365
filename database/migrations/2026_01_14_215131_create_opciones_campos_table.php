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
        Schema::create('opciones_campos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('campo_id')->constrained('campos_campanas')->cascadeOnDelete();

            $table->string('opcion', 255);
            $table->integer('orden')->default(1);
            $table->boolean('activo')->default(true);

            $table->timestamps();

            $table->unique(['campo_id', 'opcion']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opciones_campos');
    }
};
