<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DisplayEpisode extends Component
{
    public $episode;

    public function render()
    {
        return view('livewire.display-episode');
    }
}
