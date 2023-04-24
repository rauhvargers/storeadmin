<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $category1 = new Category();
        $category1->title = "Commemorative coins";
        $category1->save();

        $category2 = new Category();
        $category2->title = "Coin rolls";
        $category2->save();

    }
}
