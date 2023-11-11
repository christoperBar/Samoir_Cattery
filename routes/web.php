<?php

use App\Http\Controllers\ControllerRas;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view(
        'home',
        [
            "pagetitle" => "Home",
            "urlpage" => "/"
        ]
    );
});
Route::get('/about', function () {
    return view(
        'about',
        [
            "pagetitle" => "About Us",
            "urlpage" => "/about"
        ]
    );
});
Route::get('/why', function () {
    return view(
        'why',
        [
            "pagetitle" => "Why Samoir?",
            "urlpage" => "/why"
        ]
    );
});

Route::get('/privacy', function () {
    return view(
        'privacy',
        [
            "pagetitle" => "Privacy Policy",
            "urlpage" => "/privacy"
        ]
    );
});

Route::get('/terms', function () {
    return view(
        'terms',
        [
            "pagetitle" => "Terms & Conditions",
            "urlpage" => "/terms"
        ]
    );
});

Route::get('/catndip', function () {
    return view(
        'catndip',
        [
            "pagetitle" => "CatnDip",
            "urlpage" => "/catndip"
        ]
    );
});

Route::get('/nomnomenergy', function () {
    return view(
        'nomnomenergy',
        [
            "pagetitle" => "NomNomEnergy",
            "urlpage" => "/nomnomenergy"
        ]
    );
});

Route::get('/collection', [ControllerRas::class, 'showAllRases']);
Route::get('/collection/{rase}', [ControllerRas::class, 'getCatsWithID']);

