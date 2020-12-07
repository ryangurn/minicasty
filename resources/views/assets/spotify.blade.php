<rss xmlns:media="https://www.itunes.com/dtds/podcast-1.0.dtd"
     xmlns:itunes="https://www.itunes.com/dtds/podcast-1.0.dtd"
     xmlns:dcterms="https://purl.org/dc/terms"
     xmlns:spotify="https://www.spotify.com/ns/rss"
     xmlns:psc="http://podlove.org/simple-chapters/"
     version="2.0">

    <channel>
        <title>{{ $podcast_title }}</title>
        <link>{{ $podcast_link }}</link>
        <description>{{ $podcast_description }}</description>
        <language>{{ $language }}</language>
        <itunes:author>{{ $podcast_author }}</itunes:author>
        <itunes:image href="{{ route('asset', $podcast_image) }}" />
        <itunes:explicit>{{ ($podcast_explicit) ? "true" : "false" }}</itunes:explicit>
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
        @if (isset($podcast_itunes_complete) && $podcast_itunes_complete == true)
            <itunes:complete>{{ 'Yes' }}</itunes:complete>
        @endif
        <itunes:type>{{ strtolower($podcast_itunes_type) }}</itunes:type>
        @if (isset($podcast_spotify_country) && $podcast_spotify_country != null)
            <media:restriction type="country" relationship="allow">
                {{ \App\Models\Country::where('guid', '=', $podcast_spotify_country)->first()->{"2_digit"} }}
            </media:restriction>
        @endif
        @if (isset($podcast_spotify_limit) && $podcast_spotify_limit != null)
            <spotify:limit>{{ $podcast_spotify_limit }}</spotify:limit>
        @endif
        @if (isset($spotify_origin) && $spotify_origin != null)
            <spotify:countryoforigin>{{ $spotify_origin }}</spotify:countryoforigin>
        @endif

        {{-- item --}}
        @if (isset($episodes) && !$episodes->isEmpty())
            @foreach ($episodes as $item)
                <item>
                    <guid isPermaLink="false">{{ $item->guid }}</guid>
                    <enclosure
                            url="{{ route('audio', $item->guid) }}"
                            length="{{ Storage::disk('assets')->size($item->file->path) }}"
                            type="audio/mpeg"
                    />
                    @if (isset($item->publishing_date) && $item->publishing_date != null)
                        <pubDate>{{ (new \Carbon\Carbon($item->publishing_date))->toRfc2822String() }}</pubDate>
                    @endif
                    <title>{{ $item->title }}</title>
                    @if (isset($item->description) && $item->description != null)
                        <description>
                            <![CDATA[
                            {{ $item->description }}
                            ]]>
                        </description>
                    @endif
                    @if (isset($item->spotify->countries) && $item->spotify->countries != null)
                        <media:restriction type="country" relationship="allow">
                            @foreach($item->spotify->countries as $res){{ \App\Models\Country::where('guid', '=', $res->country)->first()->{"2_digit"} }} @endforeach
                        </media:restriction>
                    @endif
                    <itunes:duration>{{ date('i:s', ceil(\wapmorgan\MediaFile\MediaFile::open(\Illuminate\Support\Facades\Storage::disk('assets')->path($item->file->path))->getAudio()->getLength())) }}</itunes:duration>
                    @if (isset($item->order) && $item->order != null)
                        <itunes:order>{{ $item->order }}</itunes:order>
                    @endif
                    <itunes:explicit>{{ ($item->explicit) ? "true" : "false" }}</itunes:explicit>
                    @if (isset($item->image) && $item->image != null)
                        <itunes:image href="{{ route('asset.episode.image', $item->guid) }}" />
                    @endif
                    @if (isset($item->spotify->start, $item->spotify->end) && $item->spotify->start != null && $item->spotify->end)
                        <dcterms:valid>
                            start={{ (new \Carbon\Carbon($item->spotify_start))->toIso8601String() }};
                            end={{ (new \Carbon\Carbon($item->spotify_end))->toIso8601String() }};
                        </dcterms:valid>
                    @endif
                    @if (isset($item->spotify->keywords) && $item->spotify->keywords != null && $item->spotify->keywords[0] != "")
                        <itunes:keywords>{{ $item->spotify->keywords }}</itunes:keywords>
                    @endif
                    <itunes:episodeType>{{ strtolower(($item->itunes->type == 0) ? 'full' : (($item->itunes->type == 1) ? 'trailer' : 'bonus')) }}</itunes:episodeType>
                </item>
            @endforeach
        @endif
    </channel>

</rss>