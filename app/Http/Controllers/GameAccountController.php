<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\GameAccount;
use Illuminate\Support\Facades\Auth;

class GameAccountController extends Controller
{
    public function index(){
        $GameAccountList = GameAccount::get();
        return view('game_account.index')->with(['GameAccountList' => $GameAccountList,]);
    }
    
    
     public function create(){
         $gamelist = Game::get();
         return view ('game_account.create')->with([
             'gamelist' => $gamelist,]);
    }
    
    public function edit(GameAccount $account){
         $gamelist = Game::get();
         return view ('game_account.edit')->with([
             'gamelist' => $gamelist,
             'account' => $account,]);
    }
    
    public function insert(Request $request){
        $gameAccountInstance = new GameAccount();
        $gameAccountInstance->user_id = Auth::id();
        $gameAccountInstance->game_id = $request->input('game_id');
        $gameAccountInstance->game_account_name = $request->input('game_account_name');
        $gameAccountInstance->save();
        
        return redirect()->route('GameAccount.index');
    }
    
     public function update(Request $request, GameAccount $account){
        $account->game_id = $request->input('game_id');
        $account->game_account_name = $request->input('game_account_name');
        $account->save();
        
        return redirect()->route('GameAccount.index');
    }
    
    public function delete(Request $request, GameAccount $account){
        $account->delete();
        
        return redirect()->route('GameAccount.index');
    }
}
