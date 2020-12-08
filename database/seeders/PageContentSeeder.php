<?php

namespace Database\Seeders;

use App\Models\Episode;
use App\Models\Page;
use App\Models\PageContent;
use Illuminate\Database\Seeder;

class PageContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trailer = Episode::where('title', '=', 'Hiking Treks Trailer')->first()->getPage->guid;
        PageContent::create(['page' => $trailer, 'header' => 'trailer trash', 'subtitle' => 'what fun!', 'content' => "### Here is some content \n you can tell it is amazing!"]);
        PageContent::create(['page' => $trailer, 'header' => 'content block #2', 'subtitle' => 'you can add as many as you like!', 'content' => "please be sure to access this website from chrome or firefox... not safari"]);
        PageContent::create(['page' => $trailer, 'header' => 'thanks', 'subtitle' => 'for being amazing', 'content' => "# i hope i get a good grade on this! \n i think this is kinda a cool little podcast app"]);

        $s2e4 = Episode::where('title', '=', 'S02 EP04 Mt. Hood, Oregon')->first()->getPage->guid;
        PageContent::create(['page' => $s2e4, 'header' => 'have you ever been?', 'subtitle' => 'its the hoodiest!', 'content' => "please be sure to access this website from chrome or firefox... not safari"]);
        PageContent::create(['page' => $s2e4, 'header' => 'thanks', 'subtitle' => 'for being amazing', 'content' => "# i hope i get a good grade on this! \n i think this is kinda a cool little podcast app"]);

        $s2e3 = Episode::where('title', '=', 'S02 EP03 Bouldering Around Boulder')->first()->getPage->guid;
        PageContent::create(['page' => $s2e3, 'header' => 'hey thats kinda close to us', 'subtitle' => 'boulder and boulder huh!', 'content' => "please be sure to access this website from chrome or firefox... not safari"]);
        PageContent::create(['page' => $s2e3, 'header' => 'thanks', 'subtitle' => 'for being amazing', 'content' => "# i hope i get a good grade on this! \n i think this is kinda a cool little podcast app"]);

        $s2e2 = Episode::where('title', '=', 'S02 EP02 Caribou Mountain, Maine')->first()->getPage->guid;
        PageContent::create(['page' => $s2e2, 'header' => 'maine seems like the place to be', 'subtitle' => 'i here there is cheap land!', 'content' => "please be sure to access this website from chrome or firefox... not safari"]);
        PageContent::create(['page' => $s2e2, 'header' => 'thanks', 'subtitle' => 'for being amazing', 'content' => "# i hope i get a good grade on this! \n i think this is kinda a cool little podcast app"]);

        $s2e1 = Episode::where('title', '=', 'S02 EP01 Stawamus Chief')->first()->getPage->guid;
        PageContent::create(['page' => $s2e1, 'header' => 'walking walking walking...', 'subtitle' => 'hydrate to operate!', 'content' => "please be sure to access this website from chrome or firefox... not safari"]);
        PageContent::create(['page' => $s2e1, 'header' => 'thanks', 'subtitle' => 'for being amazing', 'content' => "# i hope i get a good grade on this! \n i think this is kinda a cool little podcast app"]);

        $s1e4 = Episode::where('title', '=', 'S01 EP04 Kuliouou Ridge Trail')->first()->getPage->guid;
        PageContent::create(['page' => $s1e4, 'header' => 'something about hiking', 'subtitle' => 'content!!', 'content' => "please be sure to access this website from chrome or firefox... not safari"]);
        PageContent::create(['page' => $s1e4, 'header' => 'thanks', 'subtitle' => 'for being amazing', 'content' => "# i hope i get a good grade on this! \n i think this is kinda a cool little podcast app"]);

        $s1e3 = Episode::where('title', '=', 'S01 EP03 Blood Mountain Loop')->first()->getPage->guid;
        PageContent::create(['page' => $s1e3, 'header' => 'like a magic trick', 'subtitle' => 'poof!', 'content' => "please be sure to access this website from chrome or firefox... not safari"]);
        PageContent::create(['page' => $s1e3, 'header' => 'thanks', 'subtitle' => 'for being amazing', 'content' => "# i hope i get a good grade on this! \n i think this is kinda a cool little podcast app"]);

        $s1e2 = Episode::where('title', '=', 'S01 EP02 Garden of the Gods Wilderness')->first()->getPage->guid;
        PageContent::create(['page' => $s1e2, 'header' => 'more and more', 'subtitle' => 'you can add as many as you like!', 'content' => "please be sure to access this website from chrome or firefox... not safari"]);
        PageContent::create(['page' => $s1e2, 'header' => 'thanks', 'subtitle' => 'for being amazing', 'content' => "# i hope i get a good grade on this! \n i think this is kinda a cool little podcast app"]);

        $s1e1 = Episode::where('title', '=', 'S01 EP01 Upper Priest Lake Trail to Continental Creek Trail')->first()->getPage->guid;
        PageContent::create(['page' => $s1e1, 'header' => 'dynamic content', 'subtitle' => 'you can add as many as you like!', 'content' => "please be sure to access this website from chrome or firefox... not safari"]);
        PageContent::create(['page' => $s1e1, 'header' => 'thanks', 'subtitle' => 'for being amazing', 'content' => "# i hope i get a good grade on this! \n i think this is kinda a cool little podcast app"]);

    }
}
