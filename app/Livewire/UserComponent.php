<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Reactive;

class UserComponent extends Component
{
    public User $user;

    public function render()
    {
        return <<<'HTML'
            <div>
                <div class="my-2">{{ $user->id }}. {{ $user->name }}</div>
            </div>
        HTML;
    }
}
