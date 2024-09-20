<?php

namespace Kehelle\Tide\Components\Form;

use Kehelle\Tide\TideBaseComponent;
use Kehelle\Tide\Traits\HasAddons;
use Kehelle\Tide\Traits\HasWiredModel;
use Kehelle\Tide\Traits\IsFormInput;

class Input extends TideBaseComponent
{
    use HasAddons;
    use HasWiredModel;
    use IsFormInput;

    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $label = null,
        public ?string $placeholder = null,
        public ?string $type = 'text',
        public ?string $value = null,
        public ?string $hint = null,
        public ?bool $required = null,
        public ?bool $disabled = null,
        public ?bool $readonly = null,
        public ?bool $floatingLabel = false,
    ) {}
}
