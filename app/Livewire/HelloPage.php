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
            <div x-data="{ ids: [] }" x-init="
                let i;
            
                for (i = 0; i < 5; i++) {
                  ids[i] = $id('item');
                }
            ">
                <template x-for="(id, index) in ids" :key="index">
                    <div x-text="id"></div>
                </template>
            </div>
        HTML;     
    }
}