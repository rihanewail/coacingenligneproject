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
        Schema::create('seance_entrainments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('objectif_id')->constrained('objectifs');
            $table->foreignId('coache_id')->constrained('coaches');
            $table->string('nom');
            $table->string('type');
            $table->integer('duree');
            $table->text('description');
            $table->string('niveauDifficulte');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seance_entrainments');
    }
};
