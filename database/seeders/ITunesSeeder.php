<?php

namespace Database\Seeders;

use App\Models\Asset;
use App\Models\Episode;
use App\Models\iTunes;
use Illuminate\Database\Seeder;

class ITunesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $e1 = Episode::where('title', '=', 'Hiking Treks Trailer')->first();
        iTunes::firstOrCreate(['guid' => $e1->guid, 'title' => 'Hiking Treks Trailer', 'type' => 1, 'block' => 0]);
        $e2 = Episode::where('title', '=', 'S02 EP04 Mt. Hood, Oregon')->first();
        iTunes::firstOrCreate(['guid' => $e2->guid, 'episode_number' => 4, 'season_number' => 2, 'type' => 0, 'block' => 0]);
        $e3 = Episode::where('title', '=', 'S02 EP03 Bouldering Around Boulder')->first();
        iTunes::firstOrCreate(['guid' => $e3->guid, 'episode_number' => 3, 'season_number' => 2, 'type' => 0, 'block' => 0]);
        $e4 = Episode::where('title', '=', 'S02 EP02 Caribou Mountain, Maine')->first();
        iTunes::firstOrCreate(['guid' => $e4->guid, 'episode_number' => 2, 'season_number' => 2, 'type' => 0, 'block' => 0]);
        $e5 = Episode::where('title', '=', 'S02 EP01 Stawamus Chief')->first();
        iTunes::firstOrCreate(['guid' => $e5->guid, 'episode_number' => 1, 'season_number' => 2, 'type' => 0, 'block' => 0]);
        $e6 = Episode::where('title', '=', 'S01 EP04 Kuliouou Ridge Trail')->first();
        iTunes::firstOrCreate(['guid' => $e6->guid, 'episode_number' => 4, 'season_number' => 1, 'type' => 0, 'block' => 0]);
        $e7 = Episode::where('title', '=', 'S01 EP03 Blood Mountain Loop')->first();
        iTunes::firstOrCreate(['guid' => $e7->guid, 'episode_number' => 3, 'season_number' => 1, 'type' => 0, 'block' => 0]);
        $e8 = Episode::where('title', '=', 'S01 EP02 Garden of the Gods Wilderness')->first();
        iTunes::firstOrCreate(['guid' => $e8->guid, 'episode_number' => 2, 'season_number' => 1, 'type' => 0, 'block' => 0]);
        $e9 = Episode::where('title', '=', 'S01 EP01 Upper Priest Lake Trail to Continental Creek Trail')->first();
        iTunes::firstOrCreate(['guid' => $e9->guid, 'episode_number' => 1, 'season_number' => 1, 'type' => 0, 'block' => 0]);

    }
}
