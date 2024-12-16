<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Toernooi;
use App\Models\Team;
use Illuminate\Http\Request;

class GameController extends Controller
{
    // Toont de lijst van games
    public function index()
    {
        $games = Game::with(['team1', 'team2', 'toernooi'])->get();  // Haal alle games met teams en toernooien op
        return view('games.index', compact('games'));
    }

    // Toont het formulier voor het aanmaken van een nieuwe game
    public function create()
    {
        $toernooien = Toernooi::all();  // Haal alle toernooien op
        $teams = Team::all();  // Haal alle teams op
        return view('games.create', compact('toernooien', 'teams'));  // Geef de toernooien en teams door naar de view
    }

    // Slaat een nieuwe game op
    public function store(Request $request)
    {
        $request->validate([
            'toernooi_id' => 'required|exists:toernooien,id',
            'team_1_id' => 'required|exists:teams,id',
            'team_2_id' => 'required|exists:teams,id',
            'scheduled_at' => 'required|date',
        ]);

        Game::create([
            'toernooi_id' => $request->toernooi_id,
            'team_1_id' => $request->team_1_id,
            'team_2_id' => $request->team_2_id,
            'scheduled_at' => $request->scheduled_at,
            'status' => 'scheduled',  // Standaardstatus voor de game
        ]);

        return redirect()->route('games.index')->with('success', 'Game aangemaakt!');
    }

    // Toont de details van een game
    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    // Toont het formulier om een game te bewerken
    public function edit(Game $game)
    {
        $toernooien = Toernooi::all();  // Haal alle toernooien op
        $teams = Team::all();  // Haal alle teams op
        return view('games.edit', compact('game', 'toernooien', 'teams'));  // Geef de game, toernooien en teams door naar de view
    }

    // Update een game
    public function update(Request $request, Game $game)
    {
        $request->validate([
            'team_1_score' => 'nullable|integer',
            'team_2_score' => 'nullable|integer',
        ]);

        $game->update([
            'team_1_score' => $request->input('team_1_score'),
            'team_2_score' => $request->input('team_2_score'),
        ]);

        return redirect()->route('games.index')->with('success', 'Game bijgewerkt!');
    }

    // Verwijdert een game
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index')->with('success', 'Game verwijderd!');
    }
}
