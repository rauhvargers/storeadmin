<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Displaying the coin "{{ $coin->title }}"</title>
</head>

<body>
    <h1>
        <a href="{{ route('coins.index') }}">List of coins</a> &gt; "{{ $coin->title }}"</h1>


    <h2>Details</h2>
    <h3>Production year</h3>
    <p>{{ $coin->production_year }}</p>
    <h3>Nominal price</h3>
    <p>{{ $coin->nominal_price }}</p>
    <h3>Category</h3>
    <p>{{ $coin->category->title }}</p>
    <h3>Description</h3>
    <p>{{ $coin->description }}</p>

    <a href="{{ route('coins.edit', ['slug' => $coin->url]) }}">Edit</a>
    <form action="{{ route('coins.destroy', ['slug' => $coin->url]) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>
    <footer>
        <hr />
        <a href="{{ route('home') }}">Admin home</a>
    </footer>
</body>

</html>
