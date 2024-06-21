<?php

namespace App\Http\Controllers\Gamer;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GamerController extends Controller
{
    private $repository;

    public function __construct(Game $game)
    {
        $this->repository = $game;
    }

    function index() {
        $userLoged = Auth::user();
        $gamePanding = $this->repository->gamerPending($userLoged->id);
        $question = $gamePanding->level->questions->random(1)->first();
        
        if ($gamePanding){
            return view('home.index', ['game' => $gamePanding, 'question'=> $question]);

        }else{
            $game = ["user_id" => $userLoged->id, "level_id"=> 1, "value_gain"=> '0.00', "finished" => 'N'];
            $this->store($game);
        }
        return view('home.index');
        
    }


    public function store($game)
    {
        $userLoged = Auth::user();
        $this->repository->create($game);
        return redirect()->route('home')->with('message',"Created Contact with success!");
    }
}
