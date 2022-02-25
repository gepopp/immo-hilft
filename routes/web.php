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
    return view('pages.comming-soon');
});

Route::get('/home', function () { return view('pages.comming-soon'); })->name('home');
Route::get('/terms', function () { return view('pages.terms'); })->name('terms');
Route::get('/impressum', function () { return view('pages.impressum'); })->name('impressum');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
