<?php

namespace App\Http\Livewire;

use App\Models\Asset;
use App\Models\Category;
use App\Models\Language;
use App\Models\Setting;
use Hamcrest\Core\Set;
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
        'image' => 'nullable|file|image',
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
        $image = Setting::where('key', '=', 'podcast-image')->first()->value;
        if ($image != null)
            $asset = Asset::where('guid', '=', $image)->first()->guid;

        $this->title = $title;
        $this->description = $description;
        $this->language = $language;
        $this->categories = $categories;
        $this->explicit = $explicit == "true";
        $this->author = $author;
        $this->link = $link;
        $this->owner_name = $owner['name'];
        $this->owner_email = $owner['email'];
        if ($image != null):
            $this->image = $asset;
        else:
            $this->image = null;
        endif;
    }

    public function updated($property)
    {
        return $this->validateOnly($property);
    }

    public function save()
    {
        $validated = $this->validate();

        # image content (stored to assets and referenced in settings)
        $image = Setting::where('key', '=', 'podcast-image')->first();
        $image_location = md5(time()). '.'. $this->image->getClientOriginalExtension();
        $this->image->storeAs('assets', $image_location);
        $asset = Asset::create([
            'guid' => $image->guid,
            'image' => true,
            'audio' => false,
            'path' => $image_location,
            'accessible' => true
        ]);
        $item = Asset::where('guid', '=', $image->guid)->first();
        $image->value = $item->guid;
        $image->save();

        # handle written content
        $title = Setting::where('key', '=', 'podcast-title')->first();
        $title->value = $validated['title'];
        $title->save();

        $description = Setting::where('key', '=', 'podcast-description')->first();
        $description->value = $validated['description'];
        $description->save();

        $language = Setting::where('key', '=', 'podcast-language')->first();
        $language->value = $validated['language'];
        $language->save();

        $categories = Setting::where('key', '=', 'podcast-category')->first();
        $categories->value = $validated['categories'];
        $categories->save();

        $explicit = Setting::where('key', '=', 'podcast-explicit')->first();
        $explicit->value = ($validated['explicit'] == "Yes") ? "Yes" : "No";
        $explicit->save();

        $author = Setting::where('key', '=', 'podcast-author')->first();
        $author->value = $validated['author'];
        $author->save();

        $link = Setting::where('key', '=', 'podcast-link')->first();
        $link->value = $validated['link'];
        $link->save();

        $owner = Setting::where('key', '=', 'podcast-owners')->first();
        $arr = $owner->value;
        $arr['name'] = $validated['owner_name'];
        $arr['email'] = $validated['owner_email'];
        $owner->value = $arr;
        $owner->save();

        session()->flash('saved', 'updated general settings!');

    }

    public function render()
    {
        $languages = Language::where('2_digit', '<>', NULL)->orderBy('name', 'asc')->get();
        $c = Category::all();

        return view('livewire.general-podcast-setting', compact('languages', 'c'));
    }
}
