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

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::get('/', function () {
    return view('pages.home');
});

Route::get('help-info', function () {
    return view('pages.help-info');
})->name('pages.help-info');

Route::get('/home', function (){

    return view('pages.home');

})->name('home');

Route::get('/terms', function () { return view('pages.terms'); })->name('terms');
Route::get('/impressum', function () { return view('pages.impressum'); })->name('impressum');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('newsletter/verifiy/{id}/{hash}', [\App\Http\Controllers\SubscriberController::class, 'verify'])->name('newsletter.verify');
Route::get('space/verifiy/{id}/{hash}', [\App\Http\Controllers\SpaceRegistrationController::class, 'verify'])
    ->middleware('signed')
    ->name('space.verify');


Route::get('update/space/{space_registration}/{email}', function( \App\Models\SpaceRegistration $space_registration, $email, \Illuminate\Http\Request $request){

    if($email != sha1($space_registration->email)){
        redirect(\route('home'));
    }

    return view('update-space', ['space' => $space_registration]);

})->middleware('signed')->name('space.update');
