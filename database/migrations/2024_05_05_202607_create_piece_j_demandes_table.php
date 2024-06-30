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
        Schema::create('piece_j_demandes', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->date('date');
            $table->string('lien');
            $table->foreignId('demande_inscription_id')->constrained('demande_inscriptions');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('piece_j_demandes');
    }
};
