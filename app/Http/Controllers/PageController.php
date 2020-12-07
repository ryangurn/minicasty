<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public static $env = ['navbar' => true];

    public function index()
    {
        self::$env['title'] = 'pages';
        $pages = Page::all();

        return view('pages.index', ['pages' => $pages, 'env' => self::$env]);
    }

    public function create()
    {
        self::$env['title'] = 'create page';

        return view('pages.create', ['env' => self::$env]);
    }
}
