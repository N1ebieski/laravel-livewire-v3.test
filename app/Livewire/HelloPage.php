<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class HelloPage extends Component
{
    #[Layout('components.layouts.app')]
    #[Title('Hello page')]
    public function render()
    {
        return <<<'HTML'
            <div>
                <h1>Hello</h1>
            </div>
        HTML;
    }
}
