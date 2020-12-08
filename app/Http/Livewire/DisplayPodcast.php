<?php

namespace App\Http\Livewire;

use App\Models\Asset;
use App\Models\Language;
use App\Models\Setting;
use Livewire\Component;

class DisplayPodcast extends Component
{
    public $title;
    public $description;
    public $image;
    public $language;
    public $categories;
    public $explicit;
    public $author;
    public $owners;

    public function mount()
    {
        $this->title = Setting::where('key', '=', 'podcast-title')->first()->value;
        $this->description = Setting::where('key', '=', 'podcast-description')->first()->value;
        $this->image = Asset::where('guid', '=', Setting::where('key', '=', 'podcast-image')->first()->value)->first();
        $this->language = Language::where('guid', '=', Setting::where('key', '=', 'podcast-language')->first()->value)->first()->name;
        $this->categories = Setting::where('key', '=', 'podcast-category')->first()->value;
        $this->explicit = Setting::where('key', '=', 'podcast-explicit')->first()->value;
        $this->author = Setting::where('key', '=', 'podcast-author')->first()->value;
        $this->owners = Setting::where('key', '=', 'podcast-owners')->first()->value;
    }

    public function render()
    {
        return view('livewire.display-podcast');
    }
}
