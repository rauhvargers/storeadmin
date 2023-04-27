<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>List of coins</h1>
    <table>
        <tr>
            <th>Product name</th>
            <th>Production year</th>
            <th>Price</th>
        </tr>

        @foreach ($coins as $coin)
            <tr>
                <td>{{ $coin->title }}</td>
                <td>{{ $coin->production_year }}</td>
                <td>{{ $coin->price }}</td>
            </tr>
        @endforeach
    </table>

    <a href="{{ route('coins.create')}}">New coin</a>

    <footer>
        <hr />
        <a href="{{ route('home') }}">Admin home</a>
    </footer>
</body>

</html>
