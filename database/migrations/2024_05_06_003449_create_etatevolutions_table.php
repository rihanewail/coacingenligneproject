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
        Schema::create('etatevolutions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
    $table->foreignId('objectif_id')->constrained('objectifs');
    $table->string('progression');
    $table->integer('pourcentage');
    $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etatevolutions');
    }
};
