<x-layout title='e-Monetas.lv admin panel' description='Admin it all!'>


    <x-coin-detail id="1">
        Our New Coin
    </x-coin-detail>

    <x-coin-detail id="2">Winner of 2022</x-coin-detail>

    <x-coin-detail id="3">
        Take a <a href="https://www.lu.lv">LU</a>k at this coin!

        <x-slot name="footer">
            <p>Extra footer information</p>
        </x-slot>

    </x-coin-detail>

    <x-coin-detail id="4" />

    <ul>
        <li><a href="{{ route('coins.index') }}">List of all coins</a></li>
        <li><a href="{{ route('coins.create') }}">Add new coin</a></li>

    </ul>
</x-layout>
