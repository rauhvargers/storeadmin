<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eMonetas.lv admin panel</title>
</head>
<body>
    <h1>eMonetas.lv admin panel</h1>

    <h2>Coin management</h2>
    <ul>
        <li><a href="{{ route('coins.index') }}">List of all coins</a></li>
        <li><a href="{{ route('coins.create') }}">Add new coin</a></li>

    </ul>
</body>
</html>
