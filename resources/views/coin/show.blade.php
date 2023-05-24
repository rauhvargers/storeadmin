<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Displaying the coin ' . $coin->title ) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">



                <div class="p-6 text-gray-900">


    <h2 class="mb-4 font-bold">Details</h2>
    <h3 class="pt-2 pb-1  text-bold">Production year</h3>
    <p>{{ $coin->production_year }}</p>
    <h3 class="pt-2 pb-1  text-bold">Nominal price</h3>
    <p>{{ $coin->nominal_price }}</p>
    <h3 class="pt-2 pb-1  text-bold">Category</h3>
    <p>{{ $coin->category->title }}</p>
    <h3 class="pt-2 pb-1 text-bold">Description</h3>
    <p>{{ $coin->description }}</p>

    <a href="{{ route('coins.edit', ['slug' => $coin->url]) }}">Edit</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
