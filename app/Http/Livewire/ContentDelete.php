<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContentDelete extends Component
{
    public $content;

    public function save()
    {
        $guid = $this->content->getPage->guid;
        $this->content->delete();

        redirect()->route('pages.content', $guid);
    }

    public function render()
    {
        return view('livewire.content-delete');
    }
}
