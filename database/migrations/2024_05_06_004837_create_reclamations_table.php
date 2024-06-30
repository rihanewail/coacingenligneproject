<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.	Infomodevie(idmode, worktype, sleepHours, natureFood, waterTaken, activity, date ,#idp(u))
     */
    public function up(): void
    {
        Schema::create('reclamations', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->foreignId('nutritionist_id')->constrained('nutritionists')->onDelete('cascade');
            $table->foreignId('coache_id')->constrained('coaches')->onDelete('cascade');
            $table->string('utilisateur_email'); // Changed to string type
            $table->timestamps();
        });

        // Define foreign key constraint for utilisateur_email column after its creation
        // Schema::table('reclamations', function (Blueprint $table) {
        //     $table->foreign('utilisateur_email')->references('email')->on('utilisateurs')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reclamations');
    }
};
