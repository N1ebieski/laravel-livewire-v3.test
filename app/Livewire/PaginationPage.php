<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class PaginationPage extends Component
{
    #[Layout('components.layouts.app')]
    #[Title('Pagination page')]
    public function render()
    {
        return <<<'HTML'
            <div>
                <h1>Pagination page</h1>
                <div>
                    <livewire:users-component />
                </div>
            </div>
        HTML;
    }
}
