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

            $table->integer('id_nombramiento'); // ID de tipo integer
            $table->integer('id_persona'); // ID de tipo integer
            $table->string('tipo');
            $table->string('numero');
            $table->date('fecha_emision');
            $table->date('fecha_actualizacion');
        
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
