<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Toernooi;
use App\Models\ToernooiTeam;
use App\Models\Team;
use App\Models\User;
use App\Models\Game;


class ApiController extends Controller
{
    public function Toernooien() {
        $Toernooien = Toernooi::all();
        return response()->json($Toernooien);
    }
    public function ToernooiTeam() {
        $ToernooiTeams = ToernooiTeam::all();
        return response()->json($ToernooiTeams);
    }
    public function Team() {
        $Teams = Team::all();
        return response()->json($Teams);
    }
    public function User() {
        $Users = User::all();
        return response()->json($Users);
    }
    public function Game() {
        $Games = Game::all();
        return response()->json($Games);
    }
}
