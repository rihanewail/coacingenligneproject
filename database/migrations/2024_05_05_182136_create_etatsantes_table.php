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
        Schema::create('etatsantes', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
    $table->text('description');
    $table->foreignId('infoetatsante_id')->constrained('infoetatsantes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etatsantes');
    }
};
