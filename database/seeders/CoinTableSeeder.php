<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Coin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //look up appropriate categories from DB.
        //the assumption is that CategoryTableSeeder has already been run
        $commemorative_category = Category::where('title', 'Commemorative coins')->first();
        $rolls_category = Category::where('title', 'Coin rolls')->first();

        $coin = new Coin();
        $coin->title= "Eduards Veidenbaums";
        $coin->production_year = 2017;
        $coin->nominal_price = 5.00;
        $coin->price = 75.00;
        $coin->stock = 2500;
        $coin->max_limit = 2;
        $coin->available_from = '2023-01-01';
        $coin->url  = 'eduards_veidenbaums';
        $coin->Category()->associate($commemorative_category);
        $coin->save();


        $coin = new Coin();
        $coin->title= "Finanšu pratība";
        $coin->production_year = 2022;
        $coin->nominal_price = 2.00;
        $coin->price = 50.00;
        $coin->stock = 3000;
        $coin->max_limit = 1;
        $coin->available_from = '2022-10-01';
        $coin->url  = 'finansu_pratiba';
        $coin->Category()->associate($rolls_category);
        $coin->save();


    }
}
