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
        Schema::create('demande_planifications', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->decimal('prix', 8, 2);
            $table->foreignId('coache_id')->constrained('coaches');

            // Define the columns with default values first
            // $table->unsignedBigInteger('coache_id')->default(0);

            $table->timestamps();

            // Add the foreign key constraints separately
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_planifications');
    }
};
