<?php

namespace App\Http\Livewire;

use App\Models\Page;
use App\Models\PageContent;
use Livewire\Component;

class ContentAdd extends Component
{
    public $page;
    public $header;
    public $subtitle;
    public $content;

    protected $rules = [
        'header' => 'required|min:5|max:90',
        'subtitle' => 'required|min:5|max:45',
        'content' => 'required|min:5|max:4096',
    ];

    public function updated($property)
    {
        return $this->validateOnly($property);
    }

    public function save()
    {
        $validated = $this->validate();

        $content = new PageContent();
        $content->header = $validated['header'];
        $content->subtitle = $validated['subtitle'];
        $content->content = parsedown($validated['content']);
        $content->page = $this->page->guid;
        $content->save();

        session()->flash('saved', 'added content!');
    }

    public function render()
    {
        return view('livewire.content-add');
    }
}
