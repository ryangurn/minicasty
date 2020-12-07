<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PageList extends Component
{
    public $pages;

    public function render()
    {
        return view('livewire.page-list');
    }
}
