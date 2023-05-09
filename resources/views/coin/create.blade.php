<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a new coin</title>
</head>

<body>
    <h1>Add a new coin</h1>

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
                <label for="title">Title</label>
                <input type="text" name="title" id="title" />
            </div>
            <div>
                <label for="production_year">Production year</label>
                <input id="production_year" name="production_year" type="number" min="1992" max="2023"
                    step="1" />
            </div>

            <div>
                <label for="nominal_price">Nominal price</label>
                <input id="nominal_price" name="nominal_price" type="number" />
            </div>

            <div>
                <label for="url">Url slug</label>
                <input id="url" name="url" type="text" />
            </div>

            <div>
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id">
                    <option value="">Pick a category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="description">Description</label>
                <textarea id="description" name="description"></textarea>
            </div>
            <div>
                <label for="artist_id">Artist</label>
                <select name="artist_id" id="artist_id">
                    <option value="">Pick an artist</option>
                    @foreach ($artists as $artist)
                        <option value="{{ $artist->id }}">{{ $artist->title }}</option>
                    @endforeach
                </select>
            </div>


        </fieldset>
        <fieldset>
            <legend>Sales</legend>

            <div>
                <label for="available_from">Available from</label>
                <input id="available_from" name="available_from" type="datetime-local" />
            </div>
            <div>
                <label for="price">Price</label>
                <input id="price" name="price" type="number" />
            </div>
            <div>
                <label for="stock">Stock</label>
                <input id="stock" name="stock" type="number" min="0" />
            </div>

            <div>
                <label for="max_limit">Purchase limit</label>
                <input id="max_limit" name="max_limit" type="number" min="0" />
            </div>
        </fieldset>

        <button type="submit">Save</button>
    </form>
    <footer>
        <hr />
        <a href="{{ route('home') }}">Admin home</a>
    </footer>
</body>

</html>
