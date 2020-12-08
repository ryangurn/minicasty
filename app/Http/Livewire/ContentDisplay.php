<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContentDisplay extends Component
{
    public $content;

    public function render()
    {
        return view('livewire.content-display');
    }
}
