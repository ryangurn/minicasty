<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EpisodeController extends Controller
{
    public static $env = ['navbar' => true];

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        self::$env['title'] = 'episodes';

        $episodes = Episode::where('guid', '!=', null)->orderBy('publishing_date', 'asc')->get();
        return view('episodes.index', ['env' => self::$env, 'episodes' => $episodes]);
    }

    /**
     * @param Episode $episode
     * @return Application|Factory|View|void
     */
    public function info(Episode $episode)
    {
        self::$env['title'] = 'episode: '. $episode->title;

        return view('episodes.info', ['env' => self::$env, 'episode' => $episode]);
    }
}
