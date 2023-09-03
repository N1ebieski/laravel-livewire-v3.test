<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Collection;

class HelloPage extends Component
{
    public Collection $articles;

    public string $livewire = 'livewire';

    public function mount()
    {
        $this->articles = new Collection([
            new Article(
                title: 'one-title',
                header: 'one-header'
            ),
            new Article(
                title: 'two-title',
                header: 'two-header'
            ),
            new Article(
                title: 'three-title',
                header: 'three-header'
            ),                        
        ]);
    }

    public function save()
    {
        dump($this->articles);
    }

    #[Layout('components.layouts.app')]
    #[Title('Hello page')]
    public function render()
    {
        return <<<'HTML'
            <div>
                <h1>Hello</h1>
                <form wire:submit="save">
                    <x-forms.input wire:model="livewire" />
                    <div 
                        x-data="{ articles: @entangle('articles') }"
                        x-init="console.log(articles)"
                    >
                        <template x-for="(alpine, index) in articles" x-ref="articles">
                            <div :key="index">
                                <x-forms.input x-model="articles[index].title" />
                                <x-forms.input x-model="articles[index].header" />
                            </div>
                        </template>
                    </div>
                    <button type="submit">Save</button>
                </form>
            </div>
        HTML;
    }
}
