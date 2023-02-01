<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameAccountController extends Controller
{
    public function index(){
        return view('game_account.index');
    }
    
    
     public function create(){
        return view ('game_account.create');
    }
}
