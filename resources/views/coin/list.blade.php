<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of coins') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">



                <div class="p-6 text-gray-900">

                    <h3 class='p-4'>Pick a coin to work with</h3>
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500"
                        <tr>
                            <th scope="col" class="px-6 py-4">Product name</th>
                            <th scope="col" class="px-6 py-4">Production year</th>
                            <th scope="col" class="px-6 py-4">Price</th>
                            <th scope="col" class="px-6 py-4">Actions</th>
                        </tr>
                        </thead>

                        @foreach ($coins as $coin)
                            <tr  class="border-b dark:border-neutral-500">
                                <td class="whitespace-nowrap px-6 py-4">{{ $coin->title }}</td>
                                <td lass="whitespace-nowrap px-6 py-4">{{ $coin->production_year }}</td>
                                <td lass="whitespace-nowrap px-6 py-4">{{ $coin->price }}</td>
                                <td lass="whitespace-nowrap px-6 py-4">
                                    <a href="{{ route('coins.edit', ['slug' => $coin->url]) }}">Edit</a>
                                    <a href="{{ route('coins.show', ['slug' => $coin->url]) }}">Show</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    <a href="{{ route('coins.create') }}">New coin</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
