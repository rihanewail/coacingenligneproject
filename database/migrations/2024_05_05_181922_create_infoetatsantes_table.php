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
        Schema::create('infoetatsantes', function (Blueprint $table) {
            $table->id();
            $table->float('poids');
            $table->foreignId('utilisateur_id')->constrained('utilisateurs');

            $table->timestamps();
        });

        // Define foreign key constraint for utilisateur_email column after its creation

    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infoetatsantes');
    }
};
