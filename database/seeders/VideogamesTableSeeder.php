<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Videogame;

class VideogamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $videogame = new Videogame;
        $videogame->name = "God of War";
        $videogame->category_id = 4;
        $videogame->save();

        $videogame2 = new Videogame;
        $videogame2->name = "Minecraft";
        $videogame2->category_id = 3;
        $videogame2->save();

        $videogame3 = new Videogame;
        $videogame3->name = "FIFA 22";
        $videogame3->category_id = 1;
        $videogame3->save();

        $videogame4 = new Videogame;
        $videogame4->name = "Couter Strike: Global Ofensive";
        $videogame4->category_id = 2;
        $videogame4->save();

        $videogame5 = new Videogame;
        $videogame5->name = "Elder Scrolls: Skirym";
        $videogame5->category_id = 4;
        $videogame5->save();
    }
} 
