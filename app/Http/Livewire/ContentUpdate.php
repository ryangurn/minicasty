<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContentUpdate extends Component
{
    public $con;
    public $header;
    public $subtitle;
    public $content;

    protected $rules = [
        'header' => 'required|min:5|max:90',
        'subtitle' => 'required|min:5|max:45',
        'content' => 'required|min:5|max:4096',
    ];

    public function mount()
    {
        $this->header = $this->con->header;
        $this->subtitle = $this->con->subtitle;
        $this->content = $this->con->content;
    }

    public function updated($property)
    {
        return $this->validateOnly($property);
    }

    public function save()
    {
        $validated = $this->validate();

        $con = $this->con;
        $con->header = $validated['header'];
        $con->subtitle = $validated['subtitle'];
        $con->content = $validated['content'];
        $con->save();

        session()->flash('saved', 'updated content!');
    }

    public function render()
    {
        return view('livewire.content-update');
    }
}
