<?php

namespace Kehelle\Tide\Components;

use Kehelle\Tide\TideBaseComponent;

class Divider extends TideBaseComponent
{
    public function __construct(
        public ?string $label = null,
    ) {}
}
