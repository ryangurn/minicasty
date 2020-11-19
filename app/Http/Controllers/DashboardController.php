<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

/**
 * Class DashboardController
 * @package App\Http\Controllers
 */
class DashboardController extends Controller
{
    /**
     * @var bool[]
     */
    public static $env = ['navbar' => true];


    /**
     * @return Application|Factory|View
     */
    public function landing () {
        self::$env['title'] = 'Home';
        self::$env['navbar'] = false;

        return view('welcome', ['env' => self::$env]);
    }

    public function dashboard () {
        self::$env['title'] = 'Dashboard';

        return view('dashboard', ['env' => self::$env]);
    }
}
