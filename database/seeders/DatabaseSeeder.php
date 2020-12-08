<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // standalone tables first
        $this->call(CategorySeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(LanguageSeeder::class);

        $this->call(SettingSeeder::class);

        $this->call(AssetSeeder::class);
        $this->call(EpisodeSeeder::class);
        $this->call(ITunesSeeder::class);
        $this->call(SpotifySeeder::class);
        $this->call(SpotifyRestrictionSeeder::class);

        $this->call(PageSeeder::class);
        $this->call(PageContentSeeder::class);

        $this->call(StatisticsSeeder::class);
    }
}
