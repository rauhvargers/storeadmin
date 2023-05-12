<x-layout title='e-Monetas.lv admin panel' description='Admin it all!'>


    <x-coin-detail id="1" />
    <x-coin-detail id="2" />
    <x-coin-detail id="3" />
    <x-coin-detail id="4" />

    <ul>
        <li><a href="{{ route('coins.index') }}">List of all coins</a></li>
        <li><a href="{{ route('coins.create') }}">Add new coin</a></li>

    </ul>
</x-layout>
