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
        Schema::create('profissional', function (Blueprint $table) {
            $table->id('profissional_id');
            $table->foreignId('especialidade_id')->references('especialidade_id')->on('especialidade');
            $table->string('profissional_nome');
            $table->string('profissional_crm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profissional');
    }
};
