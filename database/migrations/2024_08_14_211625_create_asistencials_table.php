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

            $table->string('nombre');
            $table->string('genero');
            $table->string('cargo');
            $table->string('ci')->unique();
            $table->string('celular');
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
