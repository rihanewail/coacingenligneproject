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
        Schema::create('demande_suivis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');

            // Define the columns with default values first
            $table->unsignedBigInteger('coache_id')->default(0);
            $table->unsignedBigInteger('nutritionist_id')->default(0);

            $table->timestamps();

            // Add the foreign key constraints separately
            $table->foreign('coache_id')->references('id')->on('coaches')->onDelete('cascade');
            $table->foreign('nutritionist_id')->references('id')->on('nutritionists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_suivis');
    }
};
