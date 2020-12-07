<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Category;
use App\Models\Country;
use App\Models\Episode;
use App\Models\Language;
use App\Models\Setting;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use wapmorgan\MediaFile\MediaFile;

class AssetController extends Controller
{
    public function view(Asset $asset)
    {
        $file = $asset->path;
        $content = Storage::disk('assets')->get($file);

        return response($content)
            ->header('Content-Type', 'image/jpeg');
    }

    public function audio(Asset $asset)
    {
        $file = $asset->path;
        // check if file exists
        if (!Storage::disk('assets')->exists($file))
        {
            abort(404);
        }


        $f = Storage::disk('assets')->get($file);
        $p = Storage::disk('assets')->path($file);

        return response($f)
            ->header('Content-Length', Storage::disk('assets')->size($file))
            ->header('Content-Type', 'audio/mpeg');
    }

    public function itunes()
    {
        $podcast_title = Setting::where('key', '=', 'podcast-title')->first()->value;
        $podcast_description = Setting::where('key', '=', 'podcast-description')->first()->value;
        $podcast_image = Setting::where('key', '=', 'podcast-image')->first()->value;
        $podcast_language = Setting::where('key', '=', 'podcast-language')->first()->value;
        $language = Language::where('guid', '=', $podcast_language)->first()->{"2_digit"};

        $podcast_categories = Setting::where('key', '=', 'podcast-category')->first()->value;
        $categories = [];
        foreach($podcast_categories as $pc)
        {
            $c = Category::where('guid', '=', $pc)->first();
            if ($c->category != null)
            {
                $categories[$c->category->name][] = $c->name;
            }
            else
            {
                $categories[] = $c->name;
            }
        }
        $podcast_explicit = Setting::where('key', '=', 'podcast-explicit')->first()->value;
        $podcast_author = Setting::where('key', '=', 'podcast-author')->first()->value;
        $podcast_link = Setting::where('key', '=', 'podcast-link')->first()->value;
        $podcast_owner = Setting::where('key', '=', 'podcast-owners')->first()->value;
        $podcast_itunes_title = Setting::where('key', '=', 'podcast-itunes-title')->first()->value;
        $podcast_itunes_type = Setting::where('key', '=', 'podcast-itunes-type')->first()->value;
        $podcast_copyright = Setting::where('key', '=', 'podcast-itunes-copyright')->first()->value;
        $podcast_new_feed_url = Setting::where('key', '=', 'podcast-itunes-new-feed-url')->first()->value;
        $podcast_itunes_block = Setting::where('key', '=', 'podcast-itunes-block')->first()->value;
        $podcast_itunes_complete = Setting::where('key', '=', 'podcast-itunes-complete')->first()->value;

        $episodes = Episode::all();

        return response()
            ->view('assets.itunes', compact('podcast_title',
'podcast_description',
            'podcast_image',
            'language',
            'categories',
            'podcast_explicit',
            'podcast_author',
            'podcast_link',
            'podcast_owner',
            'podcast_itunes_title',
            'podcast_itunes_type',
            'podcast_copyright',
            'podcast_new_feed_url',
            'podcast_itunes_block',
            'podcast_itunes_complete',
            'episodes'))
            ->header('Content-Type', 'text/xml');
    }

    public function spotify()
    {
        $podcast_title = Setting::where('key', '=', 'podcast-title')->first()->value;
        $podcast_description = Setting::where('key', '=', 'podcast-description')->first()->value;
        $podcast_image = Setting::where('key', '=', 'podcast-image')->first()->value;
        $podcast_language = Setting::where('key', '=', 'podcast-language')->first()->value;
        $language = Language::where('guid', '=', $podcast_language)->first()->{"2_digit"};

        $podcast_categories = Setting::where('key', '=', 'podcast-category')->first()->value;
        $categories = [];
        foreach($podcast_categories as $pc)
        {
            $c = Category::where('guid', '=', $pc)->first();
            if ($c->category != null)
            {
                $categories[$c->category->name][] = $c->name;
            }
            else
            {
                $categories[] = $c->name;
            }
        }
        $podcast_explicit = Setting::where('key', '=', 'podcast-explicit')->first()->value;
        $podcast_author = Setting::where('key', '=', 'podcast-author')->first()->value;
        $podcast_link = Setting::where('key', '=', 'podcast-link')->first()->value;
        $podcast_owner = Setting::where('key', '=', 'podcast-owners')->first()->value;
        $podcast_itunes_title = Setting::where('key', '=', 'podcast-itunes-title')->first()->value;
        $podcast_itunes_type = Setting::where('key', '=', 'podcast-itunes-type')->first()->value;
        $podcast_copyright = Setting::where('key', '=', 'podcast-itunes-copyright')->first()->value;
        $podcast_new_feed_url = Setting::where('key', '=', 'podcast-itunes-new-feed-url')->first()->value;
        $podcast_itunes_block = Setting::where('key', '=', 'podcast-itunes-block')->first()->value;
        $podcast_itunes_complete = Setting::where('key', '=', 'podcast-itunes-complete')->first()->value;

        $podcast_spotify_country = Setting::where('key', '=', 'podcast-spotify-country')->first()->value;
        $podcast_spotify_limit = Setting::where('key', '=', 'podcast-spotify-limit')->first()->value;
        $podcast_spotify_origin = Setting::where('key', '=', 'podcast-spotify-origin')->first()->value;
        $spotify_origin = Country::where('guid', '=', $podcast_spotify_origin)->first()->{"2_digit"};

        $episodes = Episode::all();

        return response()
            ->view('assets.spotify', compact('podcast_title',
                'podcast_description',
                'podcast_image',
                'language',
                'categories',
                'podcast_explicit',
                'podcast_author',
                'podcast_link',
                'podcast_owner',
                'podcast_itunes_title',
                'podcast_itunes_type',
                'podcast_copyright',
                'podcast_new_feed_url',
                'podcast_itunes_block',
                'podcast_itunes_complete',
                'episodes',
                'podcast_spotify_limit',
                'podcast_spotify_country',
                'spotify_origin'))
            ->header('Content-Type', 'text/xml');
    }
}
