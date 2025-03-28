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
        Schema::create('examenes_preguntas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('examen_id')->references('id')->on('examenes')->onDelete('cascade');
            $table->foreignId('pregunta_id')->references('id')->on('preguntas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examenes_preguntas');
    }
};
