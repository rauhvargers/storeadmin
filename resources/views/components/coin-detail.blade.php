<div>
    <p><strong>{{ $coin->title }}</strong></p>

    @isset($slot)
        {{ $slot }}
    @endisset

    @isset($footer)
        {{ $footer }}
    @endisset
</div>
