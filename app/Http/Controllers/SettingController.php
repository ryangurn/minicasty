<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Language;
use App\Models\Setting;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SettingController extends Controller
{

    public static $env = ['navbar' => true];
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        self::$env['title'] = 'settings';
        self::$env['languages'] = Language::where('2_digit', '<>', NULL)->get();
        self::$env['categories'] = Category::all();

        return view('settings.index', ['env' => self::$env]);
    }

}
