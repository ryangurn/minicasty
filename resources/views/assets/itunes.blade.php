<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" xmlns:content="http://purl.org/rss/1.0/modules/content/">
    <channel>
        <title>{{ $podcast_title }}</title>
        @if (isset($podcast_description) && $podcast_description != null)
            <description>
                {{ $podcast_description }}
            </description>
        @endif
        <itunes:image
                href="{{ route('asset', $podcast_image) }}"
        />
        <language>{{ $language }}</language>

        @if (isset($categories) && $categories != null)
            @foreach($categories as $key => $category)
                @if(is_numeric($key))
                    <itunes:category text="{{ $category }}" />
                @else
                    <itunes:category text="{{ $key }}">
                        @foreach($category as $vs)
                            <itunes:category text="{{ $vs }}" />
                        @endforeach
                    </itunes:category>
                @endif
            @endforeach
        @endif
        <itunes:explicit>{{ ($podcast_explicit) ? "true" : "false" }}</itunes:explicit>
        @if (isset($podcast_author) && $podcast_author != null)
            <itunes:author>{{ $podcast_author }}</itunes:author>
        @endif

        @if (isset($podcast_link) && $podcast_link != null)
            <link>{{ $podcast_link }}</link>
        @endif
        @if (isset($podcast_owner) && $podcast_owner != null)
            <itunes:owner>
                <itunes:name>{{ $podcast_owner['name'] }}</itunes:name>
                <itunes:email>{{ $podcast_owner['email'] }}</itunes:email>
            </itunes:owner>
        @endif

        @if (isset($podcast_itunes_title) && $podcast_itunes_title != null)
            <itunes:title>{{ $podcast_itunes_title }}</itunes:title>
        @endif

        <itunes:type>{{ strtolower($podcast_itunes_type) }}</itunes:type>

        @if (isset($podcast_copyright) && $podcast_copyright != null)
            <copyright>{{ $podcast_copyright }}</copyright>
        @endif

        @if (isset($podcast_new_feed_url) && $podcast_new_feed_url != null)
            <itunes:new-feed-url>{{ $podcast_new_feed_url  }}</itunes:new-feed-url>
        @endif

        @if (isset($podcast_itunes_block) && $podcast_itunes_block == "yes")
            <itunes:block>{{ $podcast_itunes_block }}</itunes:block>
        @endif

        @if (isset($podcast_itunes_complete) && $podcast_itunes_complete == "yes")
            <itunes:complete>{{ $podcast_itunes_complete }}</itunes:complete>
        @endif



        @if (isset($episodes) && !$episodes->isEmpty())
            @foreach ($episodes as $item)
                <item>
                    <title>{{ $item->title }}</title>
                    <enclosure
                            url="{{ route('audio', $item->guid) }}"
                            length="{{ Storage::disk('assets')->size($item->file->path) }}"
                            type="audio/mpeg"
                    />
                    <guid>{{ $item->guid }}</guid>
                    @if (isset($item->publishing_date) && $item->publishing_date != null)
                        <pubDate>{{ (new \Carbon\Carbon($item->publishing_date))->toRfc2822String() }}</pubDate>
                    @endif
                    @if (isset($item->description) && $item->description != null)
                        <itunes:description>
                            <![CDATA[
                            {{ $item->description }}
                            ]]>
                        </itunes:description>
                    @endif
                    <itunes:duration>{{date('i:s', ceil(\wapmorgan\MediaFile\MediaFile::open(\Illuminate\Support\Facades\Storage::disk('assets')->path($item->file->path))->getAudio()->getLength()))}}</itunes:duration>
                    @if (isset($item->link) && $item->link != null)
                        <link>{{ $item->link }}</link>
                    @endif
                    @if (isset($item->image) && $item->image != null)
                        <itunes:image href="{{ route('asset', $item->image) }}" />
                    @endif
                    <itunes:explicit>{{ ($item->explicit == 0) ? "false" : "true"  }}</itunes:explicit>
                    @if (isset($item->itunes->title) & $item->itunes->title != null)
                        <itunes:title>{{ $item->itunes->title }}</itunes:title>
                    @endif
                    @if (isset($item->itunes->episode_number) && $item->itunes->episode_number != null)
                        <itunes:episode>{{ $item->itunes->episode_number }}</itunes:episode>
                    @endif
                    @if (isset($item->itunes->season_number) && $item->itunes->season_number != null)
                        <itunes:season>{{ $item->itunes->season_number }}</itunes:season>
                    @endif
                    <itunes:episodeType>{{ strtolower(($item->itunes->type == 0) ? 'full' : (($item->itunes->type == 1) ? 'trailer' : 'bonus')) }}</itunes:episodeType>
                    @if (isset($item->itunes->block) && $item->itunes->block == true)
                        <itunes:block>{{ 'Yes' }}</itunes:block>
                    @endif
                    @if (isset($item->getPage) && $item->getPage->slug != null)
                        <link>{{ route('public', $item->getPage->slug) }}</link>
                    @endif
                </item>
            @endforeach
        @endif
    </channel>
</rss>