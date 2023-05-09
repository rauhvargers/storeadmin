<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Category;
use App\Models\Coin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class CoinController extends Controller
{
    //method for showing a single coin identified by the slug
    public function show(string $slug): View
    {
        $coin = Coin::where('url', $slug)->firstOrFail();

        return view('coin.show', compact('coin'));
    }

    //mehod for editing a single coin identified by the slug
    public function edit(string $slug): View
    {
        $coin = Coin::where('url', $slug)->firstOrFail();
        $categories = Category::orderBy('title')->get();
        $artists = Artist::orderBy('title')->get();

        return view('coin.edit', compact('coin', 'categories', 'artists'));
    }

    //method for updating a single coin identified by the slug
    public function update(Request $request, string $slug)
    {
        $coin = Coin::where('url', $slug)->firstOrFail();

        $rules = [
            'title' => 'required|min:3|max:255',
            'url' => 'required|min:3|max:255',
        ];
        $validated = $request->validate($rules);
        $coin->update($validated);


        return redirect()->route('coins.edit', ['slug' => $coin->url])->with('success_message', 'Coin was updated successfully!');
    }




    public function showAll(): View
    {
        $coins = Coin::orderByDesc('production_year')->get();

        return view("coin.list", compact('coins'));
    }

    /**
     * Form for creating a new coin
     */
    public function create(): View
    {
        $categories = Category::orderBy('title')->get();
        $artists = Artist::orderBy('title')->get();

        return view('coin.create', compact('categories', 'artists'));
    }

    // Store the newly created coin, validate the input
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|min:3|max:255',
            'url' => 'required|min:3|max:255',
            'production_year' => 'required|integer|min:1900|max:2022',
            'nominal_price' => 'required|numeric|min:0.01|max:1000',
            'price' => 'required|numeric|min:0.01|max:1000',
            'available_from' => 'required|date',
            'stock' => 'required|integer|min:0|max:1000',
            'max_limit' => 'required|integer|min:0|max:1000',
            'category_id' => 'required|integer|min:1|max:1000',
            'artist_id' => 'required|integer|min:1|max:1000',
        ];
        $validated = $request->validate($rules);
        Coin::create($validated);

        return redirect()->route('coins.show');
    }

    // Delete a coin identified by the slug, use soft delete
    public function destroy(string $slug)
    {
        $coin = Coin::where('url', $slug)->firstOrFail();
        $coin->delete();

        return redirect()->route('coins.index')->with('success_message', 'Coin was deleted successfully!');
    }

}
