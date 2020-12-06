<?php

namespace App\Http\Livewire;

use App\Models\Asset;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
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
        'title' => 'required|min:5|max:90',
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

        // check if audio submitted is an uploaded file
        if (is_a($validated['audio'], TemporaryUploadedFile::class))
        {
            $audio_location = md5(time()). '.'. $this->audio->getClientOriginalExtension();
            $this->audio->storeAs('assets', $audio_location);
            $aasset = Asset::firstOrNew([
                'guid' => $this->episode->audio,
                'image' => false,
                'audio' => true,
                'accessible' => true
            ]);
            $aasset->path = $audio_location;
            $aasset->save();
        }

        // check if image submitted is an uploaded file
        if (is_a($validated['image'], TemporaryUploadedFile::class))
        {
            $image_location = md5(time()). '.'. $this->image->getClientOriginalExtension();
            $this->image->storeAs('assets', $image_location);
            $iasset = Asset::firstOrNew([
                'guid' => $this->episode->image,
                'image' => false,
                'audio' => true,
                'accessible' => true
            ]);
            $iasset->path = $image_location;
            $iasset->save();
            $item = Asset::where('path', '=', $image_location)->first();
            $this->episode->image = $item->guid;
            $this->episode->save();
        }

        $this->episode->title = $validated['title'];
        $this->episode->description = $validated['description'];
        $this->episode->explicit = $validated['explicit'];
        $this->episode->save();

        session()->flash('saved', 'updated episode!');
    }

    public function render()
    {
        return view('livewire.episode-update');
    }
}
