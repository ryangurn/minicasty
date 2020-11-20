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
        $this->call(SpotifyRestrictionSeeder::class);

        $this->call(SettingSeeder::class);

    }
}
