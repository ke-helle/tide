<x-dynamic-component :component="$getComponentType()" {{ $attributes->except('class') }}>
    <div data-tide-btn-content data-tide-btn-size="{{ $size }}"
         data-tide-btn-variant="{{ $variant }}"
        {{ $attributes->only('class') }}>
        @includeWhen((bool) $icon, 'tide::support.icon')
        @if($label || $slot->isNotEmpty())
            <span data-tide-btn-label>{{ $label ?? $slot }}</span>
        @endif
        @includeWhen($iconTralling, 'tide::support.icon')
    </div>
</x-dynamic-component>
