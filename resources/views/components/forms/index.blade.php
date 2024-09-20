<form
    {{ $attributes->merge(['method' => $spoofMethod ? 'POST' : $method]) }}
    @if ($hasFiles)
        enctype="multipart/form-data"
    @endif

    @unless ($spellcheck)
        spellcheck="false"
    @endunless

    @unless($autocomplete)
        autocomplete="off"
    @endunless
>
    @unless (in_array($method, ['HEAD', 'GET', 'OPTIONS'], true))
        @csrf
    @endunless

    @if($spoofMethod)
        @method($method)
    @endif

    {{ $slot }}
</form>
