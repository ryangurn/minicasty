<?php

namespace Database\Seeders;

use App\Models\Asset;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # todo: add image into table and assoc with settings
        $podcast_image = Setting::where('key', '=', 'podcast-image')->first();

        $asset = Asset::create(['image' => true, 'audio' => false, 'path' => '20dbc889d70e623bafcc4b826884fceb.jpeg', 'accessible' => true]);
        $podcast_image->value = Asset::where('path', '=', '20dbc889d70e623bafcc4b826884fceb.jpeg')->first()->guid;   # set value to asset guid
        $podcast_image->save(); # save


        /*1*/Asset::create(['image' => false, 'audio' => true, 'path' => '0c940de445d5fd9653614eb31c419c7c.mp3', 'accessible' => true]);
        /*2*/Asset::create(['image' => false, 'audio' => true, 'path' => '0e0d5d47ea10c6965d889f4c3ec979c3.mp3', 'accessible' => true]);
        /*3*/Asset::create(['image' => false, 'audio' => true, 'path' => '71b4635c001198b09007ea1190a0b522.mp3', 'accessible' => true]);
        /*4*/Asset::create(['image' => false, 'audio' => true, 'path' => '7a9005ab57fa76531976aec9df3689dc.mp3', 'accessible' => true]);
        /*5*/Asset::create(['image' => false, 'audio' => true, 'path' => '7cbe60e6e5aeb01f99a1b180d1033bca.mp3', 'accessible' => true]);
        /*6*/Asset::create(['image' => false, 'audio' => true, 'path' => '8ed767a27808766598880221479dd6cb.mp3', 'accessible' => true]);
        /*7*/Asset::create(['image' => false, 'audio' => true, 'path' => '900eb727ad231a7efec1708889de0a9c.mp3', 'accessible' => true]);
        /*8*/Asset::create(['image' => false, 'audio' => true, 'path' => 'ae1dc1d69928a1bf6d98f2dd1429b571.mp3', 'accessible' => true]);
        /*9*/Asset::create(['image' => false, 'audio' => true, 'path' => 'bd034aea88d63d6f4084e73ca0e8af88.mp3', 'accessible' => true]);
    }
}
