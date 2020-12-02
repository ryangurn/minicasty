<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Episode;
use App\Models\SpotifyRestriction;
use Illuminate\Database\Seeder;

class SpotifyRestrictionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usa = Country::where('name', '=', 'United States of America')->first();
        $can = Country::where('name', '=', 'Canada')->first();

        $e1 = Episode::where('title', '=', 'Hiking Treks Trailer')->first();
        SpotifyRestriction::firstOrCreate(['spotify' => $e1->guid, 'country' => $usa->guid]);
        SpotifyRestriction::firstOrCreate(['spotify' => $e1->guid, 'country' => $can->guid]);
        $e2 = Episode::where('title', '=', 'S02 EP04 Mt. Hood, Oregon')->first();
        SpotifyRestriction::firstOrCreate(['spotify' => $e2->guid, 'country' => $usa->guid]);
        SpotifyRestriction::firstOrCreate(['spotify' => $e2->guid, 'country' => $can->guid]);
        $e3 = Episode::where('title', '=', 'S02 EP03 Bouldering Around Boulder')->first();
        SpotifyRestriction::firstOrCreate(['spotify' => $e3->guid, 'country' => $usa->guid]);
        SpotifyRestriction::firstOrCreate(['spotify' => $e3->guid, 'country' => $can->guid]);
        $e4 = Episode::where('title', '=', 'S02 EP02 Caribou Mountain, Maine')->first();
        SpotifyRestriction::firstOrCreate(['spotify' => $e4->guid, 'country' => $usa->guid]);
        SpotifyRestriction::firstOrCreate(['spotify' => $e4->guid, 'country' => $can->guid]);
        $e5 = Episode::where('title', '=', 'S02 EP01 Stawamus Chief')->first();
        SpotifyRestriction::firstOrCreate(['spotify' => $e5->guid, 'country' => $usa->guid]);
        SpotifyRestriction::firstOrCreate(['spotify' => $e5->guid, 'country' => $can->guid]);
        $e6 = Episode::where('title', '=', 'S01 EP04 Kuliouou Ridge Trail')->first();
        SpotifyRestriction::firstOrCreate(['spotify' => $e6->guid, 'country' => $usa->guid]);
        SpotifyRestriction::firstOrCreate(['spotify' => $e6->guid, 'country' => $can->guid]);
        $e7 = Episode::where('title', '=', 'S01 EP03 Blood Mountain Loop')->first();
        SpotifyRestriction::firstOrCreate(['spotify' => $e7->guid, 'country' => $usa->guid]);
        SpotifyRestriction::firstOrCreate(['spotify' => $e7->guid, 'country' => $can->guid]);
        $e8 = Episode::where('title', '=', 'S01 EP02 Garden of the Gods Wilderness')->first();
        SpotifyRestriction::firstOrCreate(['spotify' => $e8->guid, 'country' => $usa->guid]);
        SpotifyRestriction::firstOrCreate(['spotify' => $e8->guid, 'country' => $can->guid]);
        $e9 = Episode::where('title', '=', 'S01 EP01 Upper Priest Lake Trail to Continental Creek Trail')->first();
        SpotifyRestriction::firstOrCreate(['spotify' => $e9->guid, 'country' => $usa->guid]);
        SpotifyRestriction::firstOrCreate(['spotify' => $e9->guid, 'country' => $can->guid]);
    }
}
