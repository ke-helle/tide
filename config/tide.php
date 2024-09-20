<?php

// config for Kehelle/Tide
use Kehelle\Tide\Components;

return [
    'blade' => [
        'prefix' => 'tide',
        'defaults' => [
            'icon' => [
                'prefix' => '', // heroicon-
            ],
            'button' => [
                'variant' => 'clear', // primary, secondary, info, success, warning, danger, clear.
                'size' => 'sm',
                'use_wire_navigate' => true,
            ],
        ],
        'components' => [
            'button' => Components\Button\Button::class,
            'form' => Components\Form\Index::class,
        ],
    ],
    'livewire' => [],
];
