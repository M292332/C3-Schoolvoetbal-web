<?php

namespace App\Http\Controllers;
use App\Models\Team;
use App\Models\Toernooi;
use App\Models\User;
use Illuminate\Http\Request;

class ToernooiController extends Controller
{

    public function index()
    {
        $toernooien = Toernooi::all();
        return view('toernooien.index', compact('toernooien'));
    }


    public function create()
    {
        return view('toernooien.create');
    }


    public function store(Request $request)
    {
        $newToernooi = new Toernooi;
        $newToernooi->title = $request->title;
        $newToernooi->max_teams = $request->max_teams;
        $newToernooi->started = $request->started;
        $newToernooi->save();

        return redirect()->route('toernooien.index')->with('success', 'Toernooi aangemaakt!');
    }


    public function edit(Toernooi $toernooi)
    {
        return view('toernooien.edit', compact('toernooi'));
    }


    public function update(Request $request, Toernooi $toernooi)
    {
        $toernooi->title = $request->title;
        $toernooi->max_teams = $request->max_teams;
        $toernooi->started = $request->started;
        $toernooi->save();

        return redirect()->route('toernooien.index')->with('success', 'Toernooi bijgewerkt!');
    }
    public function show(Toernooi $toernooi)
{
    $teams = Team::all();
    $games = $toernooi->games;

    return view('toernooien.show', compact('toernooi', 'teams', 'games'));
}



    public function destroy(Toernooi $toernooi)
    {
        $toernooi->delete();

        return redirect()->route('toernooien.index')->with('success', 'Toernooi verwijderd!');
    }
    public function addTeam(Request $request, Toernooi $toernooi)
{

    $teamId = $request->team_id;


    if ($toernooi->teams()->where('team_id', $teamId)->exists()) {

        return redirect()->route('toernooien.show', $toernooi->id)
                         ->with('error', 'Dit team is al ingeschreven voor dit toernooi.');
    }


    if ($toernooi->teams()->count() >= $toernooi->max_teams) {
        return redirect()->route('toernooien.show', $toernooi->id)
                         ->with('error', 'Dit toernooi heeft al het maximum aantal teams bereikt.');
    }


    $toernooi->teams()->attach($teamId);


    return redirect()->route('toernooien.show', $toernooi->id)
                     ->with('success', 'Team succesvol toegevoegd!');
}


}
