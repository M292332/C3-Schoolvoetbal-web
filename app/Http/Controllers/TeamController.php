<?php
namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Player;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::with('players')->get();
        return view('teams.index', compact('teams'));
    }

    public function create()
    {
        return view('teams.create');
    }

    public function store(Request $request)
    {
        $team = Team::create([
            'name' => $request->input('name'),
        ]);

        // Voeg spelers toe aan het team
        $players = explode(',', $request->input('players'));
        foreach ($players as $playerName) {
            $team->players()->create([
                'name' => trim($playerName),
            ]);
        }

        return redirect()->route('teams.index');
    }

    public function edit(Team $team)
    {
        return view('teams.edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $team->name = $request->input('name');
        $team->save();

        $players = explode(',', $request->input('players'));
        $team->players()->delete();

        foreach ($players as $playerName) {
            $team->players()->create([
                'name' => trim($playerName),
            ]);
        }

        return redirect()->route('teams.index')->with('success', 'Team bijgewerkt!');
    }

    public function show(Team $team)
    {
        return view('teams.show', compact('team'));
    }


    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('teams.index')->with('success', 'Team verwijderd!');
    }
}
