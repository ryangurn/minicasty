<?php

namespace App\Http\Livewire;

use App\Models\Episode;
use App\Models\Page;
use App\Models\Statistics;
use Livewire\Component;

class DashboardStatistics extends Component
{
    public function render()
    {
        $episodes = Episode::all()->count();
        $pages = Page::all()->count();

        $listens = Statistics::where('episode', '<>', null)->get()->pluck('count');
        $listens = array_sum($listens->toArray());

        $views = Statistics::where('page', '<>', null)->get()->pluck('count');
        $views = array_sum($views->toArray());

        // add listens + page views

        return view('livewire.dashboard-statistics', ['episodes' => $episodes, 'pages' => $pages, 'listens' => $listens, 'views' => $views]);
    }
}
