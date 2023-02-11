<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Painel\PainelController;
use App\Http\Controllers\Painel\BlacklistController;
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

Route::get('/', [SiteController::class, 'index'])->name('site');

Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard', [PainelController::class, 'index'])->name('dashboard');
    Route::get('/blacklist', [BlacklistController::class, 'index'])->name('blacklist.index');




});

require __DIR__.'/auth.php';

/**
 Route::get('/', function () {
    return view('welcome');
});
*/


/** 
Route::get('/dashboard', [PainelController::class, 'index'])
->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/**
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
*/