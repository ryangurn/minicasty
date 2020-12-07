<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\Setting;
use Livewire\Component;

class SpotifyPodcastSetting extends Component
{
    public $spotify_country;
    public $spotify_origin;
    public $spotify_limit;

    protected $rules = [
        'spotify_country' => 'required|exists:countries,guid',
        'spotify_origin' => 'required|exists:countries,guid',
        'spotify_limit' => 'required|numeric',
    ];

    public function mount()
    {
        $this->spotify_country = Setting::where('key', '=', 'podcast-spotify-country')->first()->value;
        $this->spotify_origin = Setting::where('key', '=', 'podcast-spotify-origin')->first()->value;
        $this->spotify_limit = Setting::where('key', '=', 'podcast-spotify-limit')->first()->value;
    }

    public function updated($property)
    {
        return $this->validateOnly($property);
    }

    public function save()
    {
        $validated = $this->validate();

        $spotify_country = Setting::where('key', '=', 'podcast-spotify-country')->first();
        $spotify_origin = Setting::where('key', '=', 'podcast-spotify-origin')->first();
        $spotify_limit = Setting::where('key', '=', 'podcast-spotify-limit')->first();
        $spotify_origin->value = $validated['spotify_origin'];
        $spotify_origin->save();

        $spotify_limit->value = $validated['spotify_limit'];
        $spotify_limit->save();

        $spotify_country->value = $validated['spotify_country'];
        $spotify_country->save();

        session()->flash('saved', 'updated spotify settings!');
    }

    public function render()
    {
        $countries = Country::where('guid', '!=', NULL)->orderBy('name', 'asc')->get();

        return view('livewire.spotify-podcast-setting', ['countries' => $countries]);
    }
}
