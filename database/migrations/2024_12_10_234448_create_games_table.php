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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('toernooi_id')->constrained('toernooien')->onDelete('cascade'); // Verbindt de game met een toernooi
            $table->string('team1'); // Het eerste team
            $table->string('team2'); // Het tweede team
            $table->timestamp('scheduled_at'); // Datum en tijd van de wedstrijd
            $table->string('status')->default('scheduled'); // Status van de wedstrijd (bijv. scheduled, completed, etc.)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
