<?php

namespace Database\Seeders;

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
    }
}
