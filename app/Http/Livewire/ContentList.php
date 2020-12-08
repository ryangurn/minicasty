<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContentList extends Component
{
    public $page;

    public function render()
    {

        return view('livewire.content-list');
    }
}
