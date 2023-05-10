<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eMonetas.lv admin panel</title>
    <x-stylesheets />
</head>
<body>
    <x-page-head title='e-Monetas.lv admin panel' description="Coin store management" />

    <ul>
        <li><a href="{{ route('coins.index') }}">List of all coins</a></li>
        <li><a href="{{ route('coins.create') }}">Add new coin</a></li>

    </ul>
</body>
</html>
