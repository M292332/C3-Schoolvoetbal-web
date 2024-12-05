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
        // Schakel foreign key constraints tijdelijk uit
        Schema::disableForeignKeyConstraints();

        Schema::create('toernooi_teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('toernooi_id')->constrained('toernooien')->onDelete('cascade');
            $table->foreignId('team_id')->constrained('teams')->onDelete('cascade');
            $table->timestamps();
        });

        // Zet foreign key constraints weer aan
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schakel foreign key constraints tijdelijk uit
        Schema::disableForeignKeyConstraints();

        Schema::dropIfExists('toernooi_teams');

        // Zet foreign key constraints weer aan
        Schema::enableForeignKeyConstraints();
    }
};
