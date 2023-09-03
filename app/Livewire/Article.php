<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Extends\Livewire\Wireable;

final class Article implements Wireable
{
    public function __construct(
        public string $title, 
        public string $header
    ){
    }
 
    public function toLivewire()
    {
        return [
            'title' => $this->title,
            'header' => $this->header,
        ];
    }
 
    public static function fromLivewire($data)
    {
        return new static(...$data);
    }
}