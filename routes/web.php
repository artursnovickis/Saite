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

Route::get('/', function () {
    return view('index');
});


Route::get('/preces', function () {
    return view('preces');
});

Route::get('/kontakt', function () {
    return view('kontakt');
});

Route::get('/information', function () {
    return view('information');
});


Route::get('/jaunumi', function () {
    return view('jaunumi');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
