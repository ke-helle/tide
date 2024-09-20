<select data-tide-form-select
        {{ $attributes }}
        @if($id) id="{{ $id }}" @endif
        @if($id) name="{{ $name }}" @endif
    @readonly($readonly)
    @disabled($disabled)>
    @foreach($options as $option)
        <option value=""></option>
    @endforeach
    {{ $slot }}

</select>
