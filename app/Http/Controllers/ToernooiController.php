<?php

namespace App\Http\Controllers;

use App\Models\Toernooi;
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
        return view('toernooien.show', compact('toernooi'));
    }


    public function destroy(Toernooi $toernooi)
    {
        $toernooi->delete();

        return redirect()->route('toernooien.index')->with('success', 'Toernooi verwijderd!');
    }
}
