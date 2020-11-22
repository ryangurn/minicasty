<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Language;
use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;

class GeneralPodcastSetting extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $image;
    public $language;
    public $categories;
    public $explicit;
    public $author;
    public $link;
    public $owner_name;
    public $owner_email;

    protected $rules =
    [
        'title' => 'required|min:5|max:45',
        'description' => 'required|min:5|max:1024',
        'image' => 'required|file|image',
        'language' => 'required|exists:languages,guid',
        'categories' => 'required|exists:categories,guid',
        'explicit' => 'required',
        'author' => 'required|min:3|max:255',
        'link' => 'required|url',
        'owner_name' => 'required|min:3|max:45',
        'owner_email' => 'required|email',
    ];

    public function mount()
    {
        $title = Setting::where('key', '=', 'podcast-title')->first()->value;
        $description = Setting::where('key', '=', 'podcast-description')->first()->value;
        $language = Setting::where('key', '=', 'podcast-language')->first()->value;
        $categories = Setting::where('key', '=', 'podcast-category')->first()->value;
        $explicit = Setting::where('key', '=', 'podcast-explicit')->first()->value;
        $author = Setting::where('key', '=', 'podcast-author')->first()->value;
        $link = Setting::where('key', '=', 'podcast-link')->first()->value;
        $owner = Setting::where('key', '=', 'podcast-owners')->first()->value;

        $this->title = $title;
        $this->description = $description;
        $this->language = $language;
        $this->categories = $categories;
        $this->explicit = $explicit == "false";
        $this->author = $author;
        $this->link = $link;
        $this->owner_name = $owner['name'];
        $this->owner_email = $owner['email'];
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
        $languages = Language::where('2_digit', '<>', NULL)->orderBy('name', 'asc')->get();
        $c = Category::all();

        return view('livewire.general-podcast-setting', compact('languages', 'c'));
    }
}
