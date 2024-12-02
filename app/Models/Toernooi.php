<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toernooi extends Model
{
    use HasFactory;

    protected $table = 'toernooien';
    protected $fillable = ['title', 'max_teams', 'started'];

    /**
     * Relatie: Toernooi heeft veel teams via tussenliggende tabel.
     */
    public function teams()
    {
        return $this->belongsToMany(Team::class, 'toernooi_teams');
    }

    /**
     * Relatie: Toernooi heeft veel games.
     */
    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
