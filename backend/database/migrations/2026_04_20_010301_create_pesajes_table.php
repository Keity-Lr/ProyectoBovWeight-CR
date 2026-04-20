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
        Schema::create('pesajes', function (Blueprint $table) {
        $table->id();
        $table->foreignId('animal_id')
      ->constrained('animales')
      ->onDelete('cascade');
        $table->decimal('peso_estimado', 8, 2);
        $table->decimal('peso_real', 8, 2)->nullable();
        $table->date('fecha');
        $table->string('fuente')->nullable(); 
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesajes');
    }
};
