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
    // Cambiamos (Table $table) por (Blueprint $table)
    Schema::create('materias', function (Blueprint $table) { 
        $table->id();
        $table->string('nombre'); 
        $table->text('descripcion')->nullable(); 
        $table->integer('creditos'); 
        // Nota: Asegúrate de que la migración de 'carreras' se cree ANTES que esta
        $table->foreignId('carrera_id')->constrained(); 
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
