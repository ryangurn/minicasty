<?php

namespace App\Http\Livewire;

use App\Models\Episode;
use App\Models\Page;
use Livewire\Component;

class PageCreate extends Component
{
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

    public function updated($property)
    {
        return $this->validateOnly($property);
    }

    public function save()
    {
        $validated = $this->validate();

        $page = new Page();
        $page->title = $validated['title'];
        $page->slug = $validated['slug'];
        $page->display_podcast = $validated['display_podcast'];
        $page->display_episode = $validated['display_episode'];
        $page->episode = $validated['episode'];
        $page->save();

        session()->flash('saved', 'created page!');

        redirect()->route('pages');

    }

    public function render()
    {
        $pages_used = Page::all()->pluck('episode')->toArray();
        $e = Episode::whereNotIn('guid', $pages_used)->get();

        return view('livewire.page-create', ['e' => $e]);
    }
}
