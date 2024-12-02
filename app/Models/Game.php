<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';
    protected $fillable = ['toernooi_id', 'team_1', 'team_2', 'team_1_score', 'team_2_score'];

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
        return $this->belongsTo(Team::class, 'team_1');
    }

    /**
     * Relatie: Game heeft een team als Team 2.
     */
    public function team2()
    {
        return $this->belongsTo(Team::class, 'team_2');
    }
}
