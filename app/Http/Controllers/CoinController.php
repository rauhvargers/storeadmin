<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Category;
use App\Models\Coin;
use Illuminate\Http\Request;
use Illuminate\View\View;


class CoinController extends Controller
{

    public function showAll(): View
    {

        $coins = Coin::inCategory(1)->year(2022)->get();
        // where (a=1 or 1=false) and (b=2 or c=5)

        //$coins = Coin::orderByDesc('production_year')->get();
        // $coins = Coin::
        //         where('production_year', ">", "2020")
        //         ->where('price', '<', 80)
        //         ->where('id', '>', 2)
        //         ->get();

        dd($coins);

        return view("coin.list", compact('coins'));
    }

    public function create(): View
    {
        $categories = Category::orderBy('title')->get();
        $artists = Artist::orderBy('title')->get();

        return view('coin.create', compact('categories', 'artists'));
    }

    public function store(Request $request)
    {
        $coin = Coin::create([
            'title' => 'Augšup',
            'production_year' => 2022,
            'nominal_price' => 5.00,
            'url' => 'augsup',
            'price' => 78.50,
            'available_from' => '2022-10-22 12:00:00',
            'stock' => 200,
            'max_limit' => 2,
            'category_id' => 1
        ]);

        //return "Storing! ";
    }
}
