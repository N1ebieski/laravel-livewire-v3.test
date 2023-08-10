<?php

namespace App\Livewire;

use App\Models\Sushi;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class Pagination extends Component
{
    use WithPagination;

    #[Computed()]
    public function sushis()
    {
        return Sushi::paginate(25);
    }

    public function updatedPage()
    {
        dd('Page has been updated!');
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
            </div>

        HTML;
    }
}
