<?php

namespace Kehelle\Tide;

use Illuminate\Support\Str;
use Illuminate\View\Component;

abstract class TideBaseComponent extends Component
{
    /**
     * Returns the proper view for the current blade component.
     */
    public function render()
    {
        return view("tide.{$this::getName()}");
    }

    /**
     * Sets the propper name value for the blade commponent
     */
    public static function getName(): string
    {
        $namespace = collect(explode('.', str_replace(['/', '\\'], '.', 'App\\View\\Tide')))
            ->map([Str::class, 'kebab'])
            ->implode('.');

        $fullName = collect(explode('.', str_replace(['/', '\\'], '.', static::class)))
            ->map([Str::class, 'kebab'])
            ->implode('.');

        if (str($fullName)->startsWith($namespace)) {
            return (string) str($fullName)->substr(strlen($namespace) + 1);
        }

        return $fullName;
    }
}
