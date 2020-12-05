<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EpisodeInfo extends Component
{
    public $episode;

    public function render()
    {
        return view('livewire.episode-info');
    }
}
