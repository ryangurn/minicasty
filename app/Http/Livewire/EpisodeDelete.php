<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\File;
use Livewire\Component;

class EpisodeDelete extends Component
{
    public $episode;

    public function save()
    {
        // delete audio asset & file
        $audio = $this->episode->file->path;
        File::delete($audio);
        $this->episode->file->delete();

        // delete image asset & file
        if($this->episode->image_file != null)
        {
            $image = $this->episode->image_file->path;
            File::delete($image);
            $this->episode->image_file->delete();
        }

        // delete restriction
        foreach($this->episode->spotify->countries as $country)
        {
            $country->delete();
        }

        // delete spotify
        $this->episode->spotify->delete();

        // delete itunes
        $this->episode->itunes->delete();
        $this->episode->delete();

        $this->redirect(route('episodes'));
    }

    public function render()
    {
        return view('livewire.episode-delete');
    }
}
