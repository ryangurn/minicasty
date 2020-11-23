<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function view(Asset $asset)
    {
        dd($asset);
    }
}
