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
        Schema::create('certificados', function (Blueprint $table) {
            $table->id();
            $table->string('caso');
            $table->string('cite');
            $table->string('cargo'); 
            $table->string('nombre');
            $table->string('estudiante_de');
            $table->string('establecimiento');
            $table->date('fecha_emision');
        
            $table->integer('estado')->default(1); // Campo estado opcional
        

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificados');
    }
};
