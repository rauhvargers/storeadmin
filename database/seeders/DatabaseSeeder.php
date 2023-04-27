<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Coin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //the DB seeder knows the appropriate sequence for launching other seeders
        $this->call(CategoryTableSeeder::class);
        $this->call(ArtistSeeder::class);
        $this->call(CoinTableSeeder::class);

    }
}
