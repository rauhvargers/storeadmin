
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add a new coin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               <div class="p-6 text-gray-900">


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ route('coins.store') }}">
    @csrf

    <fieldset>
        <legend>Main</legend>
        <div>

            <x-input-label for="title" :value="__('Title')"  />
            <x-text-input type="text" name="title" id="title" value="{{old('title')}}" />
        </div>
        <div>
            <x-input-label for="production_year" :value="__('Production year')" />
            <x-text-input id="production_year" name="production_year" type="number" min="1992" max="2023"
                step="1" value="{{old('production_year')}}"/>
        </div>

        <div>
            <x-input-label for="nominal_price" :value="__('Nominal price')" />
            <x-text-input id="nominal_price" name="nominal_price" type="number" value="{{old('nominal_price')}}" />
        </div>

        <div>
            <x-input-label for="url" :value="__('Url slug')" />
            <x-text-input id="url" name="url" type="text" value="{{old('url')}}" />
        </div>

        <div>
            <x-input-label for="category_id" :value="__('Category')" />
            <select name="category_id" id="category_id">
                <option value="">Pick a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <x-input-label for="description" :value="__('Description')" />
            <textarea id="description" name="description">{{old('description')}}</textarea>
        </div>
        <div>
            <x-input-label for="artist_id" :value="__('Artist')" />
            <select name="artist_id" id="artist_id">
                <option value="">Pick an artist</option>
                @foreach ($artists as $artist)
                    <option value="{{ $artist->id }}" {{ old('artist_id') == $artist->id ? 'selected' : '' }}>{{ $artist->title }}</option>
                @endforeach
            </select>
        </div>


    </fieldset>
    <fieldset>
        <legend>Sales</legend>

        <div>
            <x-input-label for="available_from" :value="__('Available from')" />
            <input id="available_from" name="available_from" type="datetime-local" value="{{old("available_from")}}" />
        </div>
        <div>
            <x-input-label for="price" :value="__('Price')" />
            <input id="price" name="price" type="number" value="{{old('price')}}" />
        </div>
        <div>
            <x-input-label for="stock" :value="__('Stock')" />
            <input id="stock" name="stock" type="number" min="0" value="{{old('stock')}}" />
        </div>

        <div>
            <x-input-label for="max_limit" :value="__('Purchase limit')" />
            <input id="max_limit" name="max_limit" type="number" min="0" value="{{old('max_limit')}}" />
        </div>
    </fieldset>

    <button type="submit">Save</button>
</form>





                </div>
            </div>
        </div>
    </div>
</x-app-layout>
