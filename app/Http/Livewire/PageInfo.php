<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PageInfo extends Component
{
    public $page;

    public function render()
    {
        return view('livewire.page-info');
    }
}
