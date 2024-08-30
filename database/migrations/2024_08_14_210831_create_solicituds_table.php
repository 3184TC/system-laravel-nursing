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
        Schema::create('solicituds', function (Blueprint $table) {
            $table->id();

            $table->string('cite');
            $table->string('dirigido');
            $table->string('cargo'); 
            $table->string('establecimiento');
            $table->string('ref');
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
        Schema::dropIfExists('solicituds');
    }
};
