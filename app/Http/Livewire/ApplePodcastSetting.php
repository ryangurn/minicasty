<?php

namespace App\Http\Livewire;

use App\Models\Setting;
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

    public function mount()
    {
        # queries
        $itunes_title = Setting::where('key', '=', 'podcast-itunes-title')->first()->value;
        $itunes_type = Setting::where('key', '=', 'podcast-itunes-type')->first()->value;
        $copyright = Setting::where('key', '=', 'podcast-itunes-copyright')->first()->value;
        $new_feed_url = Setting::where('key', '=', 'podcast-itunes-new-feed-url')->first()->value;
        $block = Setting::where('key', '=', 'podcast-itunes-block')->first()->value;
        $complete = Setting::where('key', '=', 'podcast-itunes-complete')->first()->value;

        # mounting
        $this->itunes_title = $itunes_title;
        $this->itunes_type = $itunes_type;
        $this->copyright = $copyright;
        $this->new_feed_url = $new_feed_url;
        $this->itunes_block = $block == "Yes";
        $this->itunes_complete = $block == "Yes";
    }

    public function updated($property)
    {
        return $this->validateOnly($property);
    }

    public function save()
    {
        $validated = $this->validate();

        dd($validated);
    }

    public function render()
    {
        return view('livewire.apple-podcast-setting');
    }
}
