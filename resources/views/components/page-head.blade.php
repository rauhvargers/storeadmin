<div class="page-head">
    <h1 class="text-3xl font-bold text-gray-900">
        {{ $title }}
    </h1>
    @if (isset($description))
        <p class="mt-1 text-sm text-gray-600">
            {{ $description }}
        </p>
    @endif
</div>

@if (session('success_message'))
    <div class="alert alert-success">
        {{ session('success_message') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
