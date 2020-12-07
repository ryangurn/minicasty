<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EpisodeUpdateItunes extends Component
{
    public $episode;
    public $title;
    public $episode_number;
    public $season_number;
    public $type;
    public $block;

    protected $rules = [
        'title' => 'nullable|min:5|max:90',
        'episode_number' => 'nullable|numeric',
        'season_number' => 'nullable|numeric',
        'type' => 'nullable|in:0,1,2',
        'block' => 'nullable|in:0,1',
    ];

    public function mount()
    {
        $this->title = $this->episode->itunes->title;
        $this->episode_number = $this->episode->itunes->episode_number;
        $this->season_number = $this->episode->itunes->season_number;
        $this->type = $this->episode->itunes->type;
        $this->block = $this->episode->itunes->block;
    }

    public function updated($property)
    {
        return $this->validateOnly($property);
    }

    public function save()
    {
        $validated = $this->validate();

        $this->episode->itunes->title = $validated['title'];
        $this->episode->itunes->episode_number = $validated['episode_number'];
        $this->episode->itunes->season_number = $validated['season_number'];
        $this->episode->itunes->type = $validated['type'];
        $this->episode->itunes->block = $validated['block'];
        $this->episode->itunes->save();

        session()->flash('saved', 'updated episode\'s itunes information!');
    }

    public function render()
    {
        return view('livewire.episode-update-itunes');
    }
}
