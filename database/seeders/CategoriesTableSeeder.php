<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = new Category;
        $category->name = "Deportes";
        $category->description = "Categoria basada en deportes como, futbol, baloncesto, tenis...";
        $category->active = true;
        $category->save();

        $category2 = new Category;
        $category2->name = "Accion";
        $category2->description = "Categoria basada en juegos repletos de accion.";
        $category2->active = true;
        $category2->save();

        $category3 = new Category;
        $category3->name = "Aventuras";
        $category3->description = "Categoria basada en juegos trepidantes y llenos de misterios.";
        $category3->active = true;
        $category3->save();

        $category4 = new Category;
        $category4->name = "RPG";
        $category4->description = "Categoria basada en juegos de rol.";
        $category4->active = true;
        $category4->save();
    }
}
