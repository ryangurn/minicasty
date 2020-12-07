<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\SpotifyRestriction;
use Livewire\Component;

class EpisodeUpdateSpotify extends Component
{
    public $episode;
    public $order;
    public $start;
    public $end;
    public $keywords;
    public $countries;

    protected $rules = [
        'order' => 'nullable|numeric',
        'start' => 'nullable|date',
        'end' => 'nullable|date',
        'keywords' => 'nullable',
        'countries' => 'nullable'
    ];

    public function mount()
    {
        $this->order = $this->episode->spotify->order;
        $this->start = $this->episode->spotify->start;
        $this->end = $this->episode->spotify->end;
        $this->keywords = $this->episode->spotify->keywords;
        $this->countries = $this->episode->spotify->countries->pluck('country');
    }

    public function updated($property)
    {
        return $this->validateOnly($property);
    }

    public function save()
    {
        $validated = $this->validate();

        $this->episode->spotify->order = $validated['order'];
        if ($validated['start'] != null)
            $this->episode->spotify->start = date('Y-m-d H:i:s', strtotime($validated['start']));
        if ($validated['end'] != null)
            $this->episode->spotify->end = date('Y-m-d H:i:s', strtotime($validated['end']));
        $this->episode->spotify->keywords = $validated['keywords'];

        // save countries
        foreach($validated['countries'] as $country)
        {
            if (!in_array($country, $this->episode->spotify->countries->pluck('country')->toArray()))
            {
                SpotifyRestriction::firstOrCreate([
                    'spotify' => $this->episode->spotify->guid,
                    'country' => $country
                ]);
            }
        }

        session()->flash('saved', 'updated episode\'s spotify information!');
    }

    public function render()
    {
        $countries = Country::where('guid', '!=', NULL)->orderBy('name', 'asc')->get();
        return view('livewire.episode-update-spotify', ['c' => $countries]);
    }
}
