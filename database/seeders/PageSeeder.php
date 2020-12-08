<?php

namespace Database\Seeders;

use App\Models\Asset;
use App\Models\Episode;
use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trailer = Episode::where('title', '=', 'Hiking Treks Trailer')->first()->guid;
        Page::create(['episode' => $trailer, 'title' => 'Hiking Treks Trailer', 'slug' => 'Trailer', 'display_podcast' => false, 'display_episode' => false]);

        $s2e4 = Episode::where('title', '=', 'S02 EP04 Mt. Hood, Oregon')->first()->guid;
        Page::create(['episode' => $s2e4, 'title' => 'S2 E4', 'slug' => 's2e4', 'display_podcast' => false, 'display_episode' => false]);

        $s2e3 = Episode::where('title', '=', 'S02 EP03 Bouldering Around Boulder')->first()->guid;
        Page::create(['episode' => $s2e3, 'title' => 'S2 E3', 'slug' => 's2e3', 'display_podcast' => false, 'display_episode' => false]);

        $s2e2 = Episode::where('title', '=', 'S02 EP02 Caribou Mountain, Maine')->first()->guid;
        Page::create(['episode' => $s2e2, 'title' => 'S2 E2', 'slug' => 's2e2', 'display_podcast' => false, 'display_episode' => false]);

        $s2e1 = Episode::where('title', '=', 'S02 EP01 Stawamus Chief')->first()->guid;
        Page::create(['episode' => $s2e1, 'title' => 'S2 E1', 'slug' => 's2e1', 'display_podcast' => false, 'display_episode' => false]);

        $s1e4 = Episode::where('title', '=', 'S01 EP04 Kuliouou Ridge Trail')->first()->guid;
        Page::create(['episode' => $s1e4, 'title' => 'S1 E4', 'slug' => 's1e4', 'display_podcast' => false, 'display_episode' => false]);

        $s1e3 = Episode::where('title', '=', 'S01 EP03 Blood Mountain Loop')->first()->guid;
        Page::create(['episode' => $s1e3, 'title' => 'S1 E4', 'slug' => 's1e3', 'display_podcast' => false, 'display_episode' => false]);

        $s1e2 = Episode::where('title', '=', 'S01 EP02 Garden of the Gods Wilderness')->first()->guid;
        Page::create(['episode' => $s1e2, 'title' => 'S1 E2', 'slug' => 's1e2', 'display_podcast' => false, 'display_episode' => false]);

        $s1e1 = Episode::where('title', '=', 'S01 EP01 Upper Priest Lake Trail to Continental Creek Trail')->first()->guid;
        Page::create(['episode' => $s1e1, 'title' => 'S1 E1', 'slug' => 's1e1', 'display_podcast' => false, 'display_episode' => false]);

    }
}
