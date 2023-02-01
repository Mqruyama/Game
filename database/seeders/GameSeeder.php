<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::truncate();//データの削除
        Game::create([
            'game_name' => 'Apex'
        ]);
        
        
        Game::create([
            'game_name' => 'Valorant'
        ]);  //
    }
}
