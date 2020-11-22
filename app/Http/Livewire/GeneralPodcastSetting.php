<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Language;
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
        $languages = Language::where('2_digit', '<>', NULL)->get();
        $c = Category::all();

        return view('livewire.general-podcast-setting', compact('languages', 'c'));
    }
}
