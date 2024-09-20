<?php

namespace Kehelle\Tide\Components;

use Illuminate\Support\Str;
use Kehelle\Tide\TideBaseComponent;

class Section extends TideBaseComponent
{
    /**
     * Returns the proper view for the current blade component.
     */
    public function render()
    {
        return view("tide::components.{$this::getName()}");
    }

    /**
     * Sets the propper name value for the blade commponent
     */
    public static function getName(): string
    {
        $namespace = collect(explode('.', str_replace(['/', '\\'], '.', 'Kehelle\\Tide\\Components')))
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
