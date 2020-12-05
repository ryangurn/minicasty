<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Episode;
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
}
