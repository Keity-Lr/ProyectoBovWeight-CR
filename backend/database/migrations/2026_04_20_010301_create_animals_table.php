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
         Schema::create('animales', function (Blueprint $table) {
        $table->id();
        $table->string('numero_arete')->unique();
        $table->string('nombre')->nullable();
        $table->string('raza')->nullable();
        $table->date('fecha_nacimiento')->nullable();
        $table->string('estado')->default('activo');
        $table->foreignId('finca_id')->constrained()->onDelete('cascade');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
