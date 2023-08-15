<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Sushi;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

final class Pagination extends Component
{
    use WithPagination;

    #[Computed()]
    public function sushis()
    {
        return Sushi::paginate(5);
    }

    public function render()
    {
        return <<<'HTML'
            <div>
                @foreach ($this->sushis as $sushi)
                    <div>{{ $sushi->name }}</div>
                @endforeach

                <div>
                    {{ $this->sushis->links() }}
                </div>

                <div 
                    x-data="{ show: false }"
                    x-init="show=true"
                >
                    <div x-show="show">Livewire is great but bugged a lot!</div>
                </div>
            </div>
        HTML;
    }
}