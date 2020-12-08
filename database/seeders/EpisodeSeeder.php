<?php

namespace Database\Seeders;

use App\Models\Asset;
use App\Models\Episode;
use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $e1 = Asset::where('path', '=', '0c940de445d5fd9653614eb31c419c7c.mp3')->first();
        Episode::firstOrCreate(['title' => 'Hiking Treks Trailer', 'description' => 'The Sunset Explorers share tips, techniques and recommendations for great hikes and adventures around the United States.', 'explicit' => 0, 'audio' => $e1->guid, 'publishing_date' => date("Y-m-d H:i:s", strtotime('Tue, 8 Jan 2017 01:15:00 GMT'))]);

        $e2 = Asset::where('path', '=', '0e0d5d47ea10c6965d889f4c3ec979c3.mp3')->first();
        Episode::firstOrCreate(['title' => 'S02 EP04 Mt. Hood, Oregon', 'description' => 'Tips for trekking around the tallest mountain in Oregon', 'explicit' => 0, 'audio' => $e2->guid, 'publishing_date' => date("Y-m-d H:i:s", strtotime('Tue, 07 May 2019 12:00:00 GMT'))]);

        $e3 = Asset::where('path', '=', '71b4635c001198b09007ea1190a0b522.mp3')->first();
        Episode::firstOrCreate(['title' => 'S02 EP03 Bouldering Around Boulder', 'description' => 'We explore fun walks to climbing areas about the beautiful Colorado city of Boulder.', 'explicit' => 0, 'audio' => $e3->guid, 'publishing_date' => date("Y-m-d H:i:s", strtotime('Tue, 30 Apr 2019 13:00:00 EST'))]);

        $e4 = Asset::where('path', '=', '7a9005ab57fa76531976aec9df3689dc.mp3')->first();
        Episode::firstOrCreate(['title' => 'S02 EP02 Caribou Mountain, Maine', 'description' => 'Put your fitness to the test with this invigorating hill climb.', 'explicit' => 0, 'audio' => $e4->guid, 'publishing_date' => date("Y-m-d H:i:s", strtotime('Tue, 23 May 2019 02:00:00 -0700'))]);

        $e5 = Asset::where('path', '=', '7cbe60e6e5aeb01f99a1b180d1033bca.mp3')->first();
        Episode::firstOrCreate(['title' => 'S02 EP01 Stawamus Chief', 'description' => 'We tackle Stawamus Chief outside of Vancouver, BC and you should too!', 'explicit' => 0, 'audio' => $e5->guid, 'publishing_date' => date("Y-m-d H:i:s", strtotime('2019-02-16T07:00:00.000Z'))]);

        $e6 = Asset::where('path', '=', '8ed767a27808766598880221479dd6cb.mp3')->first();
        Episode::firstOrCreate(['title' => 'S01 EP04 Kuliouou Ridge Trail', 'description' => 'Oahu, Hawaii, has some picturesque hikes and this is one of the best!', 'explicit' => 0, 'audio' => $e6->guid, 'publishing_date' => date("Y-m-d H:i:s", strtotime('Tue, 27 Nov 2018 01:15:00 +0000'))]);

        $e7 = Asset::where('path', '=', '900eb727ad231a7efec1708889de0a9c.mp3')->first();
        Episode::firstOrCreate(['title' => 'S01 EP03 Blood Mountain Loop', 'description' => 'Hiking the Appalachian Trail and Freeman Trail in Georgia', 'explicit' => 0, 'audio' => $e7->guid, 'publishing_date' => date("Y-m-d H:i:s", strtotime('Tue, 23 Oct 2018 01:15:00 +0000'))]);

        $e8 = Asset::where('path', '=', 'ae1dc1d69928a1bf6d98f2dd1429b571.mp3')->first();
        Episode::firstOrCreate(['title' => 'S01 EP02 Garden of the Gods Wilderness', 'description' => 'Wilderness Area Garden of the Gods in Illinois is a delightful spot for an extended hike.', 'explicit' => 0, 'audio' => $e8->guid, 'publishing_date' => date("Y-m-d H:i:s", strtotime('Tue, 18 Sep 2018 01:15:00 +0000'))]);

        $e9 = Asset::where('path', '=', 'ae1dc1d69928a1bf6d98f2dd1429b571.mp3')->first();
        Episode::firstOrCreate(['title' => 'S01 EP01 Upper Priest Lake Trail to Continental Creek Trail', 'description' => 'We check out this powerfully scenic hike following the river in the Idaho Panhandle National Forests.', 'explicit' => 0, 'audio' => $e9->guid, 'publishing_date' => date("Y-m-d H:i:s", strtotime('Tue, 14 Aug 2018 01:15:00 +0000'))]);
    }
}
