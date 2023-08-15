<?php

declare(strict_types=1);

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

final class HelloPage extends Component
{
    #[Title('Hello')]
    public function render()
    {
        return <<<'HTML'
            <div>
                <x-sidebar.sidebar />
                <h1>Hello</h1>
            </div>
        HTML;       
    }
}
