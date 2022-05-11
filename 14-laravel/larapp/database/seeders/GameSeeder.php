<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $game = new Game;
        $game->name ='The las of Us';
        $game->image = 'images/thelastofus.png';
        $game->description ='lorem impsum dolor';
        $game->user_id=1;
        $game->category_id=3;
        $game->slider=1;
        $game->price=80;
        $game->save();
        //---------------------------
        $game = new Game;
        $game->name ='Halo Infinite';
        $game->image = 'images/haloinfinite.png';
        $game->description ='lorem impsum dolor';
        $game->user_id=1;
        $game->category_id=2;
        $game->slider=1;
        $game->price=90;
        $game->save();
    }
}
