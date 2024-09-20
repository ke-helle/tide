<?php

namespace Kehelle\Tide\Components;

use Kehelle\Tide\TideBaseComponent;

class Button extends TideBaseComponent
{
    public string $size = '';

    public string $variant = '';

    public function __construct(
        public ?string $label = null,
        public ?string $icon = null,
        public mixed $iconTrialling = false,
        ?string $size = null,
        ?string $variant = null,
    ) {
        $this->size = $size ?? config('tide.blade.defaults.button.size');
        $this->variant = $variant ?? config('tide.blade.defaults.button.variant');
    }

    public function getComponentType()
    {
        return $this->attributes->hasAny(['href', ':href']) ? 'tide::support.link' : 'tide::support.button';
    }
}
