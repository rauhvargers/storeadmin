<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">



                <div class="p-6 text-gray-900">
                    <ul>
                        @can('is-admin')
                            <li><a href="{{ route('coins.index') }}">List of all coins</a></li>
                        @endcan
                        <li><a href="{{ route('coins.create') }}">Add new coin</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
