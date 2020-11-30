<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EpisodeList extends Component
{
    public $episodes;

    public function render()
    {
        return view('livewire.episode-list');
    }
}
