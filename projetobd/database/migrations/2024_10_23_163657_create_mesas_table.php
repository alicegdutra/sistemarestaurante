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
        Schema::create('mesas', function (Blueprint $table) {
            $table->id();
            $table->integer('numero'); // Número da mesa
            $table->integer('capacidade'); // Capacidade de pessoas
            $table->boolean('disponivel')->default(true); // Status de disponibilidade
            $table->string('localizacao')->nullable(); // Localização da mesa (interno, externo)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesas');
    }
};
