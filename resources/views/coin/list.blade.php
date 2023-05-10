<x-layout title='List of coins' description='Pick a coin to work with'>
        <table>
        <tr>
            <th>Product name</th>
            <th>Production year</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>

        @foreach ($coins as $coin)
            <tr>
                <td>{{ $coin->title }}</td>
                <td>{{ $coin->production_year }}</td>
                <td>{{ $coin->price }}</td>
                <td>
                    <a href="{{ route('coins.edit', ['slug' => $coin->url]) }}">Edit</a>
                    <a href="{{ route('coins.show', ['slug' => $coin->url]) }}">Show</a>
                </td>
            </tr>
        @endforeach
    </table>

    <a href="{{ route('coins.create')}}">New coin</a>
</x-layout>
