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
        Schema::create('senha', function (Blueprint $table) {
            $table->id('senha_id');
            $table->foreignId('turno_id')->references('turno_id')->on('turno');
            $table->string('senha_nome');
            $table->integer('senha_tipo');
            $table->integer('senha_ativa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('senha');
    }
};
