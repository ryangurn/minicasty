<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\PageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [DashboardController::class, 'landing'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/settings', [SettingController::class, 'index'])->name('settings');

Route::group(['prefix' => 'pages'], function() {
    Route::get('/', [PageController::class, 'index'])->name('pages');
    Route::get('/create', [PageController::class, 'create'])->name('pages.create');
    Route::get('/{page:guid}', [PageController::class, 'info'])->name('pages.info');
});

Route::group(['prefix' => 'episodes'], function() {
    Route::get('/', [EpisodeController::class, 'index'])->name('episodes');
    Route::get('/create', [EpisodeController::class, 'create'])->name('create');
    Route::get('/update/{episode:guid}', [EpisodeController::class, 'update'])->name('update');
    Route::get('/{episode:guid}', [EpisodeController::class, 'info'])->name('info');
});

Route::group(['prefix' => 'assets'], function(){
    Route::get('/itunes', [AssetController::class, 'itunes'])->name('itunes');
    Route::get('/spotify', [AssetController::class, 'spotify'])->name('spotify');
});

Route::get('/asset/{asset:guid}', [AssetController::class, 'view'])->name('asset');
Route::get('/audio/{asset:guid}', [AssetController::class, 'audio'])->name('audio');