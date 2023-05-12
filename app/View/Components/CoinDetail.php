<?php

namespace App\View\Components;

use App\Models\Coin;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CoinDetail extends Component
{
    public Coin $coin;
    /**
     * Create a new component instance.
     */
    public function __construct($id)
    {
        $this->coin = Coin::find($id);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.coin-detail');
    }
}
