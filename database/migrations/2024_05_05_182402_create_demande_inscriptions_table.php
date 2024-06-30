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
        Schema::create('demande_inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('email');
    $table->string('nom');
    $table->string('prenom');
    $table->char('sex');
    $table->date('Date_N')->default('2000-01-01');
    // $table->string('photo',300)->nullable();
    $table->string('specialite');
    $table->integer('experience');
// $table->foreignId('admin_id')->constrained('admins')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_inscriptions');
    }
};
