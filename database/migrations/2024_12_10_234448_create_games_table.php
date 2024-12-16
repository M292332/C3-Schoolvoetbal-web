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
            $table->foreignId('team_1_id')->constrained('teams')->onDelete('cascade'); // Verbindt de game met team 1
            $table->foreignId('team_2_id')->constrained('teams')->onDelete('cascade'); // Verbindt de game met team 2
            $table->timestamp('scheduled_at'); // Datum en tijd van de wedstrijd
            $table->string('status')->default('scheduled'); // Standaard status van de game
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
