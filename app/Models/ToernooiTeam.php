<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToernooiTeam extends Model
{
    use HasFactory;

    protected $table = 'toernooi_teams';

    /**
     * Relatie: ToernooiTeam behoort tot een toernooi.
     */
    public function toernooi()
    {
        return $this->belongsTo(Toernooi::class);
    }

    /**
     * Relatie: ToernooiTeam behoort tot een team.
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
