<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PageDelete extends Component
{
    public $page;

    public function save()
    {
        // delete content first
        $contents = $this->page->getContents;
        if (!$contents->isEmpty())
        {
            foreach($contents as $content)
            {
                $content->delete();
            }
        }

        $this->page->delete();

        redirect()->route('pages');
    }

    public function render()
    {
        return view('livewire.page-delete');
    }
}
