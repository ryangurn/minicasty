<?php

namespace App\Http\Livewire;

use App\Models\Asset;
use App\Models\Episode;
use App\Models\iTunes;
use App\Models\Spotify;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class EpisodeCreate extends Component
{
    use WithFileUploads;

    public $title;
    public $publishing_date;
    public $description;
    public $explicit;
    public $audio;
    public $image;

    protected $rules = [
        'title' => 'required|min:5|max:90',
        'publishing_date' => 'required|date',
        'description' => 'required|min:5|max:1024',
        'explicit' => 'required',
        'audio' => 'required',
        'image' => 'nullable',
    ];

    public function updated($property)
    {
        return $this->validateOnly($property);
    }

    public function save()
    {
        $validated = $this->validate();
        // link things & create episode
        $episode = new Episode();
        $episode->title = $validated['title'];
        $episode->publishing_date = date('Y-m-d H:i:s', strtotime($validated['publishing_date']));
        $episode->description = $validated['description'];
        $episode->explicit = $validated['explicit'];

        // upload files
        if (is_a($validated['audio'], TemporaryUploadedFile::class))
        {
            $audio_location = md5(time()). '.'. $this->audio->getClientOriginalExtension();
            $this->audio->storeAs('assets', $audio_location);
            $aasset = Asset::firstOrNew([
                'image' => false,
                'audio' => true,
                'accessible' => true,
                'path' => $audio_location
            ]);
            $aasset->save();
            $aitem = Asset::where('path', '=', $audio_location)->first();
            $episode->audio = $aitem->guid;

        }

        // check if image submitted is an uploaded file
        if (is_a($validated['image'], TemporaryUploadedFile::class))
        {
            $image_location = md5(time()). '.'. $this->image->getClientOriginalExtension();
            $this->image->storeAs('assets', $image_location);
            $iasset = Asset::firstOrNew([
                'image' => false,
                'audio' => true,
                'accessible' => true,
                'path' => $image_location
            ]);
            $iasset->save();
            $iitem = Asset::where('path', '=', $image_location)->first();
            $episode->image = $iitem->guid;
        }

        $episode->save();
        $eitem = Episode::where('title', '=', $validated['title'])->where('description', '=', $validated['description'])->first();

        // setup itunes
        iTunes::create(['guid' => $eitem->guid]);
        // setup spotify
        Spotify::create(['guid' => $eitem->guid]);

        redirect()->route('episodes');
    }

    public function render()
    {
        return view('livewire.episode-create');
    }
}
