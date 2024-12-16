<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;


    protected $fillable = [
        'toernooi_id',
        'team_1_id',
        'team_2_id',
        'team_1_score',  // Zorg ervoor dat deze velden hier staan
        'team_2_score',
        'scheduled_at',
        'status',
    ];


    /**
     * Relatie: Game behoort tot een toernooi.
     */
    public function toernooi()
    {
        return $this->belongsTo(Toernooi::class);
    }

    /**
     * Relatie: Game heeft een team als Team 1.
     */
    public function team1()
    {
        return $this->belongsTo(Team::class, 'team_1_id');
    }

    /**
     * Relatie: Game heeft een team als Team 2.
     */
    public function team2()
    {
        return $this->belongsTo(Team::class, 'team_2_id');
    }
}
