<?php

namespace App\Http\Livewire;

use App\Models\Asset;
use Livewire\Component;
use Livewire\WithFileUploads;

class EpisodeUpdate extends Component
{
    use WithFileUploads;

    public $episode;
    public $title;
    public $publishing_date;
    public $description;
    public $explicit;
    public $image;
    public $audio;

    protected $rules = [
        'title' => 'required|min:5|max:45',
        'publishing_date' => 'required|date',
        'description' => 'required|min:5|max:1024',
        'explicit' => 'required',
        'audio' => 'required',
        'image' => 'nullable',
    ];

    public function mount()
    {
        $this->title = $this->episode->title;
        $this->publishing_date = $this->episode->publishing_date;
        $this->description = $this->episode->description;
        $this->explicit = ($this->episode->explicit ? true : false);
        $this->audio = $this->episode->audio;
        $this->image = $this->episode->image;
    }

    public function updated($property)
    {
        return $this->validateOnly($property);
    }

    public function save()
    {
        $validated = $this->validate();

        // check if audio submitted is an asset already
        if (Asset::where('guid', '=', $validated['audio'])->first() == null)
        {

        }

        $this->episode->title = $validated['title'];
        $this->episode->description = $validated['description'];
        $this->episode->explicit = $validated['explicit'];
        $this->episode->save();

        dump($this->episode);
        dd($validated);
    }

    public function render()
    {
        return view('livewire.episode-update');
    }
}
