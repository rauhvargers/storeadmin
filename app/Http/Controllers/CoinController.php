<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Coin;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CoinController extends Controller
{

    public function showAll(): View {
        $coins = Coin::all();
        return view("coin.list", compact('coins'));



    }


}
