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
        Schema::create('infomodevies', function (Blueprint $table) {
            $table->id();


            $table->foreignId('utilisateur_id')->constrained('utilisateurs')->onDelete('cascade');

            $table->string('worktype');
            $table->string('sleepHours');
            $table->string('natureFood');
            $table->string('waterTaken');
            $table->string('activity');
            $table->date('date');
            $table->timestamps();
        });

        // Add utilisateur_email column after the table creation

    }

        // Define foreign key constraint for utilisateur_email column after its creation

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('infomodevies');
    }
};
