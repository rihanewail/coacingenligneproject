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
        Schema::create('objectifs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->string('type');
            $table->foreignId('user_id')->constrained('users');
            // $table->foreignId('nutritionist_id')->constrained('nutritionists');
            // $table->foreignId('coache_id')->constrained('coaches');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objectifs');
    }
};
