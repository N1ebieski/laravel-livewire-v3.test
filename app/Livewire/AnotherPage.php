<?php

declare(strict_types=1);

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

final class AnotherPage extends Component
{
    #[Title('Another page')]
    public function render()
    {
        return <<<'HTML'
            <div>
                <x-sidebar.sidebar />
                <h1>Another Page</h1>
                <livewire:pagination />
            </div>        
        HTML;
    }
}