<?php

namespace Database\Seeders;

use App\Models\Episode;
use App\Models\iTunes;
use App\Models\Spotify;
use Illuminate\Database\Seeder;

class SpotifySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $e1 = Episode::where('title', '=', 'Hiking Treks Trailer')->first();
        Spotify::firstOrCreate(['guid' => $e1->guid, 'order' => 0, 'keywords' => 'Hiking']);
        $e2 = Episode::where('title', '=', 'S02 EP04 Mt. Hood, Oregon')->first();
        Spotify::firstOrCreate(['guid' => $e2->guid, 'order' => 1, 'keywords' => 'Oregon']);
        $e3 = Episode::where('title', '=', 'S02 EP03 Bouldering Around Boulder')->first();
        Spotify::firstOrCreate(['guid' => $e3->guid, 'order' => 2, 'keywords' => 'Boulder']);
        $e4 = Episode::where('title', '=', 'S02 EP02 Caribou Mountain, Maine')->first();
        Spotify::firstOrCreate(['guid' => $e4->guid, 'order' => 3, 'keywords' => 'Maine']);
        $e5 = Episode::where('title', '=', 'S02 EP01 Stawamus Chief')->first();
        Spotify::firstOrCreate(['guid' => $e5->guid, 'order' => 4, 'keywords' => 'Vancouver']);
        $e6 = Episode::where('title', '=', 'S01 EP04 Kuliouou Ridge Trail')->first();
        Spotify::firstOrCreate(['guid' => $e6->guid, 'order' => 5, 'keywords' => 'Hawaii']);
        $e7 = Episode::where('title', '=', 'S01 EP03 Blood Mountain Loop')->first();
        Spotify::firstOrCreate(['guid' => $e7->guid, 'order' => 6, 'keywords' => 'Georgia']);
        $e8 = Episode::where('title', '=', 'S01 EP02 Garden of the Gods Wilderness')->first();
        Spotify::firstOrCreate(['guid' => $e8->guid, 'order' => 7, 'keywords' => 'Illinois']);
        $e9 = Episode::where('title', '=', 'S01 EP01 Upper Priest Lake Trail to Continental Creek Trail')->first();
        Spotify::firstOrCreate(['guid' => $e9->guid, 'order' => 8, 'keywords' => 'Idaho']);

    }
}
