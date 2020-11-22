<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ApplePodcastSetting extends Component
{
    public $itunes_title;
    public $itunes_type;
    public $copyright;
    public $new_feed_url;
    public $itunes_block;
    public $itunes_complete;

    protected $rules =
    [
        'itunes_title' => 'nullable|min:3|max:45',
        'itunes_type' => 'nullable|in:serial,episodic',
        'copyright' => 'nullable|min:3|max:255',
        'new_feed_url' => 'nullable|url',
        'itunes_block' => 'nullable',
        'itunes_complete' => 'nullable'
    ];

    public function updated($property)
    {
        return $this->validateOnly($property);
    }

    public function render()
    {
        return view('livewire.apple-podcast-setting');
    }
}
