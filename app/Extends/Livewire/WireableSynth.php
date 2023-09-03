<?php

declare(strict_types=1);

namespace App\Extends\Livewire;

use Livewire\Features\SupportWireables\WireableSynth as BaseWireableSynth;

final class WireableSynth extends BaseWireableSynth
{
    static function match($target)
    {
        return is_object($target) && $target instanceof Wireable;
    }

    public function set(&$target, $key, $value)
    {
        $target->{$key} = $value;
    }    
}