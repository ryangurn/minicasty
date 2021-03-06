<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageContent;
use App\Models\Statistics;
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

    public function info(Page $page)
    {
        self::$env['title'] = 'page: '. $page->title;

        return view('pages.info', ['page' => $page, 'env' => self::$env]);
    }

    public function update(Page $page)
    {
        self::$env['title'] = 'update page: '. $page->title;

        return view('pages.update', ['page' => $page, 'env' => self::$env]);
    }

    public function content(Page $page)
    {
        self::$env['title'] = 'page content for: '. $page->title;

        return view('pages.content', ['page' => $page, 'env' => self::$env]);
    }

    public function content_update(PageContent $content)
    {
        self::$env['title'] = $content->header;

        return view('pages.content-update', ['content' => $content, 'env' => self::$env]);

    }

    public function public(Page $page)
    {
        self::$env['title'] = $page->title;

        $stat = Statistics::firstOrNew(['page' => $page->guid]);
        $stat->count = $stat->count + 1;
        $stat->save();

        return view('pages.public', ['page' => $page, 'env' => self::$env]);
    }
}
