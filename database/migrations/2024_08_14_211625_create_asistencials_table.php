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
        Schema::create('asistencials', function (Blueprint $table) {
            $table->id();

            $table->int('id_grado');
            $table->int('id_asignacion');
            $table->date('fecha_emision');
            $table->date('fecha_actualizacion');
        
            $table->integer('estado')->default(1);
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencials');
    }
};
