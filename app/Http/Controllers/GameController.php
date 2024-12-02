<?php
namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Toernooi;
use App\Models\Team;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Toon een lijst van alle games.
     */
    public function index()
    {
        $games = Game::with(['team1', 'team2', 'toernooi'])->get();
        return view('games.index', compact('games'));
    }

    /**
     * Toon een formulier voor het aanmaken van een game.
     */
    public function create()
    {
        $toernooien = Toernooi::all();
        $teams = Team::all();
        return view('games.create', compact('toernooien', 'teams'));
    }

    /**
     * Sla een nieuwe game op.
     */
    public function store(Request $request)
    {
        $request->validate([
            'toernooi_id' => 'required|exists:toernooien,id',
            'team_1' => 'required|exists:teams,id',
            'team_2' => 'required|exists:teams,id',
            'team_1_score' => 'nullable|integer',
            'team_2_score' => 'nullable|integer',
        ]);

        Game::create($request->all());

        return redirect()->route('games.index')->with('success', 'Game aangemaakt!');
    }

    /**
     * Toon de details van een specifieke game.
     */
    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    /**
     * Toon een formulier voor het bewerken van een game.
     */
    public function edit(Game $game)
    {
        $toernooien = Toernooi::all();
        $teams = Team::all();
        return view('games.edit', compact('game', 'toernooien', 'teams'));
    }

    /**
     * Werk een bestaande game bij.
     */
    public function update(Request $request, Game $game)
    {
        $request->validate([
            'toernooi_id' => 'required|exists:toernooien,id',
            'team_1' => 'required|exists:teams,id',
            'team_2' => 'required|exists:teams,id',
            'team_1_score' => 'nullable|integer',
            'team_2_score' => 'nullable|integer',
        ]);

        $game->update($request->all());

        return redirect()->route('games.index')->with('success', 'Game bijgewerkt!');
    }

    /**
     * Verwijder een game.
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index')->with('success', 'Game verwijderd!');
    }
}
