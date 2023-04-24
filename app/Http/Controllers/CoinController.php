<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CoinController extends Controller
{

    public function showAllDb(): View {

        $coins = Coin::all();

        //uncomment the next line to see output of Eleoquent model read results
        //dd($coins);

        return view("coin.dblist", compact('coins'));
    }


    //
    public function showAll(): View
    {
        $coins = [
            ["title" => "Ukrainas brīvībai", "price" => 75.50, "year" => 2022, "status" => "available"],
            ["title" => "Augšup", "price" => 78.00, "year" => 2022, "status" => "available"],
            ["title" => "Eduards Veidenbaums", "price" => 80.00, "year" => 2017, "status" => "available"],
            ["title" => "Atslēdziņa", "price" => 98.00, "year" => 2021, "status" => "soldout"]
        ];

        $statuses = [
            "available" => "Available",
            "available-soon" => "Not yet available",
            "temp-unavail" => "Temporarily unavailable",
            "soldout" => "Sold out"
        ];

        return view('coin.list',
                ["coins" => $coins,
                "BigTitle" => "List of all coins (the Big Title)",
                "Statuses" => $statuses]);
    }
}
