<?php

namespace App\Http\Livewire;

use App\Models\Episode;
use App\Models\Page;
use Livewire\Component;

class DashboardStatistics extends Component
{
    public function render()
    {
        $episodes = Episode::all()->count();
        $pages = Page::all()->count();

        // add listens + page views

        return view('livewire.dashboard-statistics', ['episodes' => $episodes, 'pages' => $pages]);
    }
}
