<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Coin;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CoinController extends Controller
{

    public function showAll(): View
    {
        $coins = Coin::orderByDesc('production_year')->get();
        return view("coin.list", compact('coins'));
    }

    public function create(): View
    {
        $categories = Category::orderBy('title')->get();

        return view('coin.create', compact('categories'));
    }
}
