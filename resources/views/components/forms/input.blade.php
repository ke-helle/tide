<
<x-tide:form.field>>
    @if($label)
        <x-tide::label :value="$label"/>
    @endif
    @includeWhen((bool) $hint, 'tide::forms.slots.hint')
    <input data-tide-form-input
           {{ $attributes }}
           type="{{ $type }}"
           @if($id) id="{{ $id }}" @endif
           @if($id) name="{{ $name }}" @endif
        @readonly($readonly)
        @disabled($disabled)
    />
    @includeWhen((bool) $description, 'tide::forms.slots.description')
</x-tide:form.field>
