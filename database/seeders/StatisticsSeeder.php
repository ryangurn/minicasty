<?php

namespace Database\Seeders;

use App\Models\Episode;
use App\Models\PageContent;
use App\Models\Statistics;
use Illuminate\Database\Seeder;

class StatisticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trailer = Episode::where('title', '=', 'Hiking Treks Trailer')->first()->getPage->guid;
        Statistics::create(['page' => $trailer]);
        $s2e4 = Episode::where('title', '=', 'S02 EP04 Mt. Hood, Oregon')->first()->getPage->guid;
        Statistics::create(['page' => $s2e4]);
        $s2e3 = Episode::where('title', '=', 'S02 EP03 Bouldering Around Boulder')->first()->getPage->guid;
        Statistics::create(['page' => $s2e3]);
        $s2e2 = Episode::where('title', '=', 'S02 EP02 Caribou Mountain, Maine')->first()->getPage->guid;
        Statistics::create(['page' => $s2e2]);
        $s2e1 = Episode::where('title', '=', 'S02 EP01 Stawamus Chief')->first()->getPage->guid;
        Statistics::create(['page' => $s2e1]);
        $s1e4 = Episode::where('title', '=', 'S01 EP04 Kuliouou Ridge Trail')->first()->getPage->guid;
        Statistics::create(['page' => $s1e4]);
        $s1e3 = Episode::where('title', '=', 'S01 EP03 Blood Mountain Loop')->first()->getPage->guid;
        Statistics::create(['page' => $s1e3]);
        $s1e2 = Episode::where('title', '=', 'S01 EP02 Garden of the Gods Wilderness')->first()->getPage->guid;
        Statistics::create(['page' => $s1e2]);
        $s1e1 = Episode::where('title', '=', 'S01 EP01 Upper Priest Lake Trail to Continental Creek Trail')->first()->getPage->guid;
        Statistics::create(['page' => $s1e1]);

        $etrailer = Episode::where('title', '=', 'Hiking Treks Trailer')->first()->guid;
        Statistics::create(['episode' => $etrailer]);
        $es2e4 = Episode::where('title', '=', 'S02 EP04 Mt. Hood, Oregon')->first()->guid;
        Statistics::create(['episode' => $es2e4]);
        $es2e3 = Episode::where('title', '=', 'S02 EP03 Bouldering Around Boulder')->first()->guid;
        Statistics::create(['episode' => $es2e3]);
        $es2e2 = Episode::where('title', '=', 'S02 EP02 Caribou Mountain, Maine')->first()->guid;
        Statistics::create(['episode' => $es2e2]);
        $es2e1 = Episode::where('title', '=', 'S02 EP01 Stawamus Chief')->first()->guid;
        Statistics::create(['episode' => $es2e1]);
        $es1e4 = Episode::where('title', '=', 'S01 EP04 Kuliouou Ridge Trail')->first()->guid;
        Statistics::create(['episode' => $es1e4]);
        $es1e3 = Episode::where('title', '=', 'S01 EP03 Blood Mountain Loop')->first()->guid;
        Statistics::create(['episode' => $es1e3]);
        $es1e2 = Episode::where('title', '=', 'S01 EP02 Garden of the Gods Wilderness')->first()->guid;
        Statistics::create(['episode' => $es1e2]);
        $es1e1 = Episode::where('title', '=', 'S01 EP01 Upper Priest Lake Trail to Continental Creek Trail')->first()->guid;
        Statistics::create(['episode' => $es1e1]);


    }
}
