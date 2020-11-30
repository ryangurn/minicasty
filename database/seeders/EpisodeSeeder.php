<?php

namespace Database\Seeders;

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
        /*
         *  1	guid	varchar(255)	utf8mb4	utf8mb4_unicode_ci	NO	NULL
         *  2	title	varchar(45)	utf8mb4	utf8mb4_unicode_ci	NO	NULL
         *  3	audio	varchar(255)	utf8mb4	utf8mb4_unicode_ci	NO	NULL
         *  4	publishing_date	timestamp	NULL	NULL	YES	NULL
         *  5	description	varchar(45)	utf8mb4	utf8mb4_unicode_ci	NO	NULL
         *  6	image	varchar(255)	utf8mb4	utf8mb4_unicode_ci	YES	NULL
         *  7	explicit	tinyint(1)	NULL	NULL	NO	0
         *  8	created_at	timestamp	NULL	NULL	YES	NULL
         *  9	updated_at	timestamp	NULL	NULL	YES	NULL
         *
         */

        //<item>
        //      <itunes:episodeType>trailer</itunes:episodeType>
        //      <itunes:title>Hiking Treks Trailer</itunes:title>
        //      <description>
        //          <![CDATA[The Sunset Explorers share tips, techniques and recommendations for
        //          great hikes and adventures around the United States. Listen on
        //          <a href="https://www.apple.com/itunes/podcasts/">Apple Podcasts</a>.]]>
        //        </content:encoded>
        //      </description>
        //      <enclosure
        //        length="498537"
        //        type="audio/mpeg"
        //        url="http://example.com/podcasts/everything/AllAboutEverythingEpisode4.mp3"
        //      />
        //      <guid>aae20190418</guid>
        //      <pubDate>Tue, 8 Jan 2019 01:15:00 GMT</pubDate>
        //      <itunes:duration>1079</itunes:duration>
        //      <itunes:explicit>false</itunes:explicit>
        //    </item>
        //    <item>
        //      <itunes:episodeType>full</itunes:episodeType>
        //      <itunes:episode>4</itunes:episode>
        //      <itunes:season>2</itunes:season>
        //      <title>S02 EP04 Mt. Hood, Oregon</title>
        //      <description>
        //        Tips for trekking around the tallest mountain in Oregon
        //      </description>
        //      <enclosure
        //        length="8727310"
        //        type="audio/x-m4a"
        //        url="http://example.com/podcasts/everything/mthood.m4a"
        //      />
        //      <guid>aae20190606</guid>
        //      <pubDate>Tue, 07 May 2019 12:00:00 GMT</pubDate>
        //      <itunes:duration>1024</itunes:duration>
        //      <itunes:explicit>false</itunes:explicit>
        //    </item>
        //    <item>
        //      <itunes:episodeType>full</itunes:episodeType>
        //      <itunes:episode>3</itunes:episode>
        //      <itunes:season>2</itunes:season>
        //      <title>S02 EP03 Bouldering Around Boulder</title>
        //      <description>
        //        We explore fun walks to climbing areas about the beautiful Colorado city of Boulder.
        //      </description>
        //      <itunes:image
        //        href="http://example.com/podcasts/everything/AllAboutEverything/Episode2.jpg"
        //      />
        //      <link>href="http://example.com/podcasts/everything/</link>
        //      <enclosure
        //        length="5650889"
        //        type="video/mp4"
        //        url="http://example.com/podcasts/boulder.mp4"
        //      />
        //      <guid>aae20190530</guid>
        //      <pubDate>Tue, 30 Apr 2019 13:00:00 EST</pubDate>
        //      <itunes:duration>3627</itunes:duration>
        //      <itunes:explicit>false</itunes:explicit>
        //    </item>
        //    <item>
        //      <itunes:episodeType>full</itunes:episodeType>
        //      <itunes:episode>2</itunes:episode>
        //      <itunes:season>2</itunes:season>
        //      <title>S02 EP02 Caribou Mountain, Maine</title>
        //      <description>
        //        Put your fitness to the test with this invigorating hill climb.
        //      </description>
        //      <itunes:image
        //        href="http://example.com/podcasts/everything/AllAboutEverything/Episode3.jpg"
        //      />
        //      <enclosure
        //        length="5650889"
        //        type="audio/x-m4v"
        //        url="http://example.com/podcasts/everything/caribou.m4v"
        //      />
        //      <guid>aae20190523</guid>
        //      <pubDate>Tue, 23 May 2019 02:00:00 -0700</pubDate>
        //      <itunes:duration>2434</itunes:duration>
        //      <itunes:explicit>false</itunes:explicit>
        //    </item>
        //    <item>
        //      <itunes:episodeType>full</itunes:episodeType>
        //      <itunes:episode>1</itunes:episode>
        //      <itunes:season>2</itunes:season>
        //      <title>S02 EP01 Stawamus Chief</title>
        //      <description>
        //        We tackle Stawamus Chief outside of Vancouver, BC and you should too!
        //      </description>
        //      <enclosure
        //        length="498537"
        //        type="audio/mpeg"
        //        url="http://example.com/podcasts/everything/AllAboutEverythingEpisode4.mp3"
        //      />
        //      <guid>aae20190516</guid>
        //      <pubDate>2019-02-16T07:00:00.000Z</pubDate>
        //      <itunes:duration>13:24</itunes:duration>
        //      <itunes:explicit>false</itunes:explicit>
        //    </item>
        //    <item>
        //      <itunes:episodeType>full</itunes:episodeType>
        //      <itunes:episode>4</itunes:episode>
        //      <itunes:season>1</itunes:season>
        //      <title>S01 EP04 Kuliouou Ridge Trail</title>
        //      <description>
        //        Oahu, Hawaii, has some picturesque hikes and this is one of the best!
        //      </description>
        //      <enclosure
        //        length="498537"
        //        type="audio/mpeg"
        //        url="http://example.com/podcasts/everything/AllAboutEverythingEpisode4.mp3"
        //      />
        //      <guid>aae20190509/guid>
        //      <pubDate>Tue, 27 Nov 2018 01:15:00 +0000</pubDate>
        //      <itunes:duration>929</itunes:duration>
        //      <itunes:explicit>false</itunes:explicit>
        //    </item>
        //    <item>
        //      <itunes:episodeType>full</itunes:episodeType>
        //      <itunes:episode>3</itunes:episode>
        //      <itunes:season>1</itunes:season>
        //      <title>S01 EP03 Blood Mountain Loop</title>
        //      <description>
        //        Hiking the Appalachian Trail and Freeman Trail in Georgia
        //      </description>
        //      <enclosure
        //        length="498537"
        //        type="audio/mpeg"
        //        url="http://example.com/podcasts/everything/AllAboutEverythingEpisode4.mp3"
        //      />
        //      <guid>aae20190502</guid>
        //      <pubDate>Tue, 23 Oct 2018 01:15:00 +0000</pubDate>
        //      <itunes:duration>1440</itunes:duration>
        //      <itunes:explicit>false</itunes:explicit>
        //    </item>
        //    <item>
        //      <itunes:episodeType>full</itunes:episodeType>
        //      <itunes:episode>2</itunes:episode>
        //      <itunes:season>1</itunes:season>
        //      <title>S01 EP02 Garden of the Gods Wilderness</title>
        //      <description>
        //        Wilderness Area Garden of the Gods in Illinois is a delightful spot for
        //        an extended hike.
        //      </description>
        //      <enclosure
        //        length="498537"
        //        type="audio/mpeg"
        //        url="http://example.com/podcasts/everything/AllAboutEverythingEpisode4.mp3"
        //      />
        //      <guid>aae20190425</guid>
        //      <pubDate>Tue, 18 Sep 2018 01:15:00 +0000</pubDate>
        //      <itunes:duration>839</itunes:duration>
        //      <itunes:explicit>false</itunes:explicit>
        //    </item>
        //    <item>
        //      <itunes:episodeType>full</itunes:episodeType>
        //      <itunes:episode>1</itunes:episode>
        //      <itunes:season>1</itunes:season>
        //      <title>S01 EP01 Upper Priest Lake Trail to Continental Creek Trail</title>
        //      <description>
        //        We check out this powerfully scenic hike following the river in the Idaho
        //        Panhandle National Forests.
        //      </description>
        //      <enclosure
        //        length="498537"
        //        type="audio/mpeg"
        //        url="http://example.com/podcasts/everything/AllAboutEverythingEpisode4.mp3"
        //      />
        //      <guid>aae20190418a</guid>
        //      <pubDate>Tue, 14 Aug 2018 01:15:00 +0000</pubDate>
        //      <itunes:duration>1399</itunes:duration>
        //      <itunes:explicit>false</itunes:explicit>
        //    </item>
    }
}
