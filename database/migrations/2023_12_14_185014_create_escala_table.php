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
        Schema::create('escala', function (Blueprint $table) {
            $table->id('escala_id');
            $table->foreignId('profissional_id')->references('profissional_id')->on('profissional');
            $table->foreignId('especialidade_id')->references('especialidade_id')->on('especialidade');
            $table->date('escala_data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escala');
    }
};
