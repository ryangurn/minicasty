<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::firstOrCreate(['key' => 'podcast-title', 'value' => 'Hiking Treks']);
        Setting::firstOrCreate(['key' => 'podcast-description', 'value' => 'Love to get outdoors and discover nature&apos;s treasures? Hiking Treks is the
      show for you. We review hikes and excursions, review outdoor gear and interview
      a variety of naturalists and adventurers. Look for new episodes each week.']);
        Setting::firstOrCreate(['key' => 'podcast-image', 'value' => NULL]);
        Setting::firstOrCreate(['key' => 'podcast-language', 'value' => '6987f56e-2a95-11eb-90d3-0242ac110002']);
        Setting::firstOrCreate(['key' => 'podcast-category', 'value' => ['67d78cb8-2a95-11eb-90d3-0242ac110002', '67eb33c6-2a95-11eb-90d3-0242ac110002', ]]);
        Setting::firstOrCreate(['key' => 'podcast-explicit', 'value' => 'false']);
        Setting::firstOrCreate(['key' => 'podcast-author', 'value' => 'The Sunset Explorers']);
        Setting::firstOrCreate(['key' => 'podcast-link', 'value' => 'https://www.apple.com/itunes/podcasts/']);
        Setting::firstOrCreate(['key' => 'podcast-owners', 'value' => ['name' => 'Sunset Explorers', 'email' => 'mountainscape@icloud.com']]);
        Setting::firstOrCreate(['key' => 'podcast-itunes-title', 'value' => 'Hiking Treks Trailer']);
        Setting::firstOrCreate(['key' => 'podcast-itunes-type', 'value' => 'serial']);
        Setting::firstOrCreate(['key' => 'podcast-itunes-copyright', 'value' => '&#169; 2020 John Appleseed']);
        Setting::firstOrCreate(['key' => 'podcast-itunes-new-feed-url', 'value' => NULL]);
        Setting::firstOrCreate(['key' => 'podcast-itunes-block', 'value' => 'No']);
        Setting::firstOrCreate(['key' => 'podcast-itunes-complete', 'value' => 'No']);
    }
}
