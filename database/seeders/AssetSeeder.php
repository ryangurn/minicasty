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

        $asset = Asset::create(['guid' => $podcast_image->guid, 'image' => true, 'audio' => false, 'path' => '20dbc889d70e623bafcc4b826884fceb.jpeg', 'accessible' => true]);
        $podcast_image->value = Asset::where('guid', '=', $podcast_image->guid)->first()->guid;   # set value to asset guid
        $podcast_image->save(); # save
    }
}
