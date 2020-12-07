<?php

namespace App\Http\Livewire;

use App\Models\Episode;
use App\Models\Page;
use Livewire\Component;

class PageUpdate extends Component
{
    public $page;
    public $title;
    public $slug;
    public $display_podcast;
    public $display_episode;
    public $episode;

    protected $rules = [
        'title' => 'required|min:5|max:45',
        'slug' => 'required|alpha_dash|min:5|max:45',
        'display_podcast' => 'nullable',
        'display_episode' => 'nullable',
        'episode' => 'required|exists:episodes,guid'
    ];

    public function mount()
    {
        $this->title = $this->page->title;
        $this->slug = $this->page->slug;
        $this->display_podcast = $this->page->display_podcast;
        $this->display_episode = $this->page->display_episode;
        $this->episode = $this->page->episode;
    }

    public function updated($property)
    {
        return $this->validateOnly($property);
    }

    public function save()
    {
        $validated = $this->validate();

        $page = $this->page;
        $page->title = $validated['title'];
        $page->slug = $validated['slug'];
        $page->display_podcast = $validated['display_podcast'];
        $page->display_episode = $validated['display_episode'];
        $page->episode = $validated['episode'];
        $page->save();

        session()->flash('saved', 'updated page!');
    }

    public function render()
    {
        $e = Episode::all();

        return view('livewire.page-update', ['e' => $e]);
    }
}
