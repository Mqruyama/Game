<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameAccountController extends Controller
{
    public function index(){
        return view('game_account.index');
    }
    
    
     public function create(){
         $gamelist = Game::get();
         return view ('game_account.create')->with([
             'gamelist' => $gamelist,]);
    }
}
