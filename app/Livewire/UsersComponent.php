<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class UsersComponent extends Component
{
    use WithPagination;

    public string $order = 'asc';

    #[Computed()]
    public function users()
    {
        return User::orderBy('id', $this->order)->paginate(10);
    }

    public function toggleOrder()
    {
        $this->order = $this->order === 'asc' ? 'desc' : 'asc';
    }

    public function render()
    {
        return <<<'HTML'
            <div>
                @foreach ($this->users as $user)
                    <livewire:user-component :user="$user" :key="$user->id">
                @endforeach

                <div>
                    {{ $this->users->links() }}
                </div>

                <button wire:click="toggleOrder">
                    Toggle order
                </button>                
            </div>
        HTML;
    }
}
