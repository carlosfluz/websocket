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
        Schema::create('sala_senha', function (Blueprint $table) {
            $table->id('sala_senha_id');
            $table->foreignId('sala_id')->references('sala_id')->on('sala');
            $table->foreignId('senha_id')->references('senha_id')->on('senha');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sala_senha');
    }
};
