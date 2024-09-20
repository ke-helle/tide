<textarea data-tide-form-textarea
          {{ $attributes }}
          type="{{ $type }}"
          @if($id) id="{{ $id }}" @endif
          @if($id) name="{{ $name }}" @endif
    @readonly($readonly)
    @disabled($disabled)></textarea>
