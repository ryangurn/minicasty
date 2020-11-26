<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AssetController extends Controller
{
    public function view(Asset $asset)
    {
        $file = $asset->path;
        $content = Storage::disk('assets')->get($file);

        return response($content)
            ->header('Content-Type', 'image/jpeg');
    }
}
