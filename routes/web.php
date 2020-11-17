<?php

use Illuminate\Support\Facades\Route;

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

$env = [];
$env['navbar'] = true;

Route::get('/', function () use ($env) {
    $env['title'] = 'Home';
    $env['navbar'] = false;

    return view('welcome', compact('env'));
})->name('home');


Route::get('/dashboard', function() use ($env) {
    $env['title'] = 'Dashboard';

    return view('dashboard', compact('env'));
})->name('dashboard');